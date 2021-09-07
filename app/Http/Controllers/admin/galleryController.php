<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    public function __construct()
    {
        $this->data = \App\system::getmasterdata();
    }

    public function index()
    {
        $this->data['gallery']=\App\Models\gallery::getList();
        return view('admin.gallery.index', $this->data);
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $gallery_created = \App\Models\gallery::creategallery($request);
        if (isset($gallery_created))
        {
            $validator = \Validator::make($request->all() , ['gallery_imgs' => 'required|image|mimes:jpeg,png,jpg,gif,svg', ]);
            if ($files = $request->file('gallery_imgs'))
            {
                foreach ($files as $file)
                {
                    $name = time() . str_replace(' ', '', $file->getClientOriginalName());
                    $filename = \App\system::fileuploader('/gallery', $name, $file, 'public');
                    $gallery_images_created = \App\Models\gallery_img::creategalleryimagebyid($request,$gallery_created,$filename);
                }
                alert()->success('Gallery has been saved Prperly push send.', 'Save Sucessfully');
                return \Redirect::route('gallery.index');
            }     
            alert()->error('You Gallery has not been saved Prperly.', 'Something Went Wrong');
            return \Redirect::route('gallery.index');
        }

    }

    public function show($id)
    {
        //
        
    }

    public function edit($id)
    {
        //
        
    }

    public function update(Request $request, $id)
    {
        //
        
    }

    public function destroy($id)
    {
        //
        
    }



    public function uploadtoserver()
    {
	
		@set_time_limit(5 * 60);
		$targetDir = FCPATH . "uploads";
		//$targetDir = 'uploads';
		$cleanupTargetDir = true; // Remove old files
		$maxFileAge = 5 * 3600; // Temp file age in seconds
    	if (!file_exists($targetDir)) {
			@mkdir($targetDir);
		}
    
        if (isset($_REQUEST["name"])) {
			$fileName = $_REQUEST["name"];
		} elseif (!empty($_FILES)) {
			$fileName = $_FILES["file"]["name"];
		} else {
			$fileName = uniqid("file_");
		}

		$filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

		// Chunking might be enabled
		$chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
		$chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;


		// Remove old temp files	
		if ($cleanupTargetDir) {
			if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
				die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
			}

			while (($file = readdir($dir)) !== false) {
				$tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

				// If temp file is current file proceed to the next
				if ($tmpfilePath == "{$filePath}.part") {
					continue;
				}

				// Remove temp file if it is older than the max age and is not the current file
				if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge)) {
					@unlink($tmpfilePath);
				}
			}
			closedir($dir);
		}	


		// Open temp file
		if (!$out = @fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
			die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
		}

		if (!empty($_FILES)) {
			if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
				die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
			}

			// Read binary input stream and append it to temp file
			if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
				die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
			}
		} else {	
			if (!$in = @fopen("php://input", "rb")) {
				die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
			}
		}

		while ($buff = fread($in, 4096)) {
			fwrite($out, $buff);
		}

		@fclose($out);
		@fclose($in);

		// Check if file has been uploaded
		if (!$chunks || $chunk == $chunks - 1) {
			// Strip the temp .part suffix off 
			rename("{$filePath}.part", $filePath);
		}

		// Return Success JSON-RPC response
		die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');

    }

}
