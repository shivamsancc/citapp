@section('title','Create Page')
@extends('admin.layouts.app')
@section('extra-css')
@endsection
@section('content')
<div class="row">
    <form action="{{route('page.update',$page->id)}}" method="POST" enctype="multipart/form-data">@csrf
        <div class="row">
            <div class="col-9 row">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="key">Page Title</label>
                                <input type="text" name="page_title" required id="page_title" class="form-control"
                                    placeholder="Site Name" aria-describedby="helpId" value="{{$page->page_title}}">
                                <small id="helpId" class="text-muted">Enter Setting Name ex:Site Name</small>
                            </div>
                        </div>
                       <div class="form-group">
						 <label for="">Page Body</label>
						 <textarea class="form-control" name="page_body" id="page_body" rows="3">{{$page->page_body}}</textarea>
					   </div>
                    </div>
                </div>
				<div class="card">
					<div class="card-body">
						<div class="form-group">
                            <label for="">Meta Title</label>
                            <input type="text" class="form-control" name="meta_tilte" id="meta_tilte" value="{{$page->meta_tilte}}" aria-describedby="helpId"
                                placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="form-group">
                            <label for="">Meta Keyword</label>
                            <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" value="{{$page->meta_keyword}}" aria-describedby="helpId"
                                placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="form-group">
                            <label for="">Meta Description</label>
                            <textarea class="form-control" name="meta_discription" id="meta_discription"  rows="3">{{$page->meta_discription}}</textarea>
                        </div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<div class="form-group">
                            <label for="">Header Code</label>
                            <textarea class="form-control" name="header_code" id="header_code"  rows="3">{{$page->header_code}}</textarea>
                        </div>
						<div class="form-group">
                            <label for="">Footer Code</label>
                            <textarea class="form-control" name="footer_code" id="footer_code"  rows="3">{{$page->footer_code}}</textarea>
                        </div>
					</div>
				</div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12 ">
                            <button type="submit" class="btn btn-outline-primary float-outline-start"
                                href="#" role="button">Draft</button>
                            <button type="submit" class="btn btn-outline-primary float-end" href="#"
                                role="button">Sumit</button><br><br>

                            <div class="form-group">
                                <label for="">Visiblity :</label>
                                <select class="form-control" required name="visiblity" id="visiblity">
                                    <option selected value=""> Select </option>
                                    <option value="public"{{ ( $page->visiblity == 'public') ? 'selected' : '' }}>Public</option>
                                    <option value="private" {{ ( $page->visiblity == 'private') ? 'selected' : '' }}>Private</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Status :</label>
                                <select class="form-control" required name="status" id="status">
                                    <option selected value=""> Select </option>
                                    <option value="publish" {{ ( $page->status == 'publish') ? 'selected' : '' }}>Publish</option>
                                    <option value="draft" {{ ( $page->status == 'draft') ? 'selected' : '' }}>Draft</option>
                                    <option value="trash" {{ ( $page->status == 'trash') ? 'selected' : '' }}> Trash</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
						<div class="form-group">
						  <label for="">Featured Image</label>
						  <input type="file" class="form-control" name="feat_img" id="feat_img" placeholder="" aria-describedby="fileHelpId">
						  <small id="fileHelpId" class="form-text text-muted">Help text</small>
						</div>
                       @isset($page->feat_img)
                          <a href="{{$page->feat_img}}" target="_blank"><img class="img-fluid" src="{{$page->feat_img}}" alt="{{$page->page_title}}"></a>
                       @endisset
                    </div>
                </div>
            </div>
        </div>
        @method('PUT');
    </form>
</div>
@endsection
@section('extra-js')
<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('page_body', {
      extraPlugins: 'editorplaceholder',
      editorplaceholder: 'Start typing here...',
      removeButtons: 'PasteFromWord'
    });
  </script>
@endsection
