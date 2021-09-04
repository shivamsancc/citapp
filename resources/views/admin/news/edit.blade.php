@section('title','Edit News')
@extends('admin.layouts.app')
@section('extra-css')
@endsection
@section('content')
<div class="row">
    <form action="{{route('news.store',$news->id)}}" method="POST" enctype="multipart/form-data">@csrf
        <div class="row">
            <div class="col-9 row">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="key">Page Title</label>
                                <input type="text" name="news_title" required id="news_title" class="form-control"
                                    placeholder="Site Name" aria-describedby="helpId" value="{{$news->news_title}}">
                                <small id="helpId" class="text-muted">Enter Setting Name ex:Site Name</small>
                            </div>
                        </div>
                       <div class="form-group">
						 <label for="">Page Body</label>
						 <textarea class="form-control" name="news_body" id="news_body" rows="3">{{$news->news_body}}</textarea>
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
                                    <option value="public"{{ ( $news->visiblity == 'public') ? 'selected' : '' }}>Public</option>
                                    <option value="private" {{ ( $news->visiblity == 'private') ? 'selected' : '' }}>Private</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Status :</label>
                                <select class="form-control" required name="status" id="status">
                                    <option selected value=""> Select </option>
                                    <option value="publish" {{ ( $news->status == 'publish') ? 'selected' : '' }}>Publish</option>
                                    <option value="draft" {{ ( $news->status == 'draft') ? 'selected' : '' }}>Draft</option>
                                    <option value="trash" {{ ( $news->status == 'trash') ? 'selected' : '' }}> Trash</option>
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
                       @isset($news->feat_img)
                          <a href="{{$news->feat_img}}" target="_blank"><img class="img-fluid" src="{{$news->feat_img}}" alt="{{$news->news_title}}"></a>
                       @endisset
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('extra-js')
<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('news_body', {
      extraPlugins: 'editorplaceholder',
      editorplaceholder: 'Start typing here...',
      removeButtons: 'PasteFromWord'
    });
  </script>
@endsection
