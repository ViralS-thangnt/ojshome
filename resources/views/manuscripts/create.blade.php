@extends('layout.master.master')

@section('title-page-admin')
BẢN THẢO
@stop

@section('title')
Tạo bản thảo mới
@stop

@section('content')

	<div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Quick Example</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="manuscript_type">Thể loại bài viết</label>
                    <select class="form-control" id="manuscript_type" name="manuscript_type">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="manuscript_name">Tên bài viết</label>
                    <textarea class="form-control" rows="3" 
                    			placeholder="Nhập tên bài viết. Tối đa 20 từ ..."
                    			name="manuscript_name" id="manuscript_name"></textarea>
                </div>

                <div class="form-group">
                    <label for="brief_vn">Tóm tắt Tiếng Việt</label>
                    <textarea class="form-control" rows="3" 
                    			placeholder="Nhập tóm tắt Tiếng Việt. Độ dài từ 150 - 200 từ ..."
                    			name="brief_vn" id="brief_vn"></textarea>
                </div>

                <div class="form-group">
                    <label>Từ khoá Tiếng Việt</label>
                    <select multiple="" class="form-control" name="keyword_vn" id="keyword_vn">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                </div>


				<div class="form-group">
                    <label for="brief_en">Tóm tắt Tiếng Anh</label>
                    <textarea class="form-control" rows="3" 
                    			placeholder="Nhập tóm tắt Tiếng Anh. Độ dài từ 150 - 200 từ ..."
                    			name="brief_en" id="brief_en"></textarea>
                </div>


                <div class="form-group">
                    <label>Từ khoá Tiếng </label>
                    <select multiple="" class="form-control" name="keyword_en" id="keyword_en">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                </div>
                


                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                    <label>
                        <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Check me out
                    </label>
                </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>


@stop
