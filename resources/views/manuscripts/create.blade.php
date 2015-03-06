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
            <h3 class="box-title">Thông tin bản thảo mới</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ url('/admin/manuscript/create') }}" method="POST">
            <div class="box-body">
                <div class="form-group">
                    <label for="manuscript_type" style="font-size: large">Thể loại bài viết  (<span style="color: red">*</span>)</label>
                    <select class="form-control" id="manuscript_type" name="manuscript_type">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="manuscript_name">Tên bài viết</label><p class="help-block">Example block-level help text here.</p>
                    <textarea class="form-control" rows="3" 
                    			placeholder="Nhập tên bài viết. Tối đa 20 từ ..."
                    			name="manuscript_name" id="manuscript_name"></textarea>
                </div>

                <div class="form-group">
                    <label for="brief_vn">Tóm tắt Tiếng Việt</label><p class="help-block">Example block-level help text here.</p>
                    <textarea class="form-control" rows="3" 
                    			placeholder="Nhập tóm tắt Tiếng Việt. Độ dài từ 150 - 200 từ ..."
                    			name="brief_vn" id="brief_vn"></textarea>
                </div>

                <div class="form-group">
                    <label>Từ khoá Tiếng Việt (3 - 5 từ)</label><p class="help-block">Example block-level help text here.</p>
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
                    <label for="brief_en">Tóm tắt Tiếng Anh</label><p class="help-block">Example block-level help text here.</p>
                    <textarea class="form-control" rows="3" 
                    			placeholder="Nhập tóm tắt Tiếng Anh. Độ dài từ 150 - 200 từ ..."
                    			name="brief_en" id="brief_en"></textarea>
                </div>


                <div class="form-group">
                    <label>Từ khoá Tiếng Anh (3 - 5 từ)</label><p class="help-block">Example block-level help text here.</p>
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
                    <label for="topic">Chủ đề bài viết</label><p class="help-block">Example block-level help text here.</p>
                    <textarea class="form-control" rows="3" 
                    			placeholder="Nhập chủ đề bài viết"
                    			name="topic" id="topic"></textarea>
                </div>

                <div class="form-group">
                    <label for="propose_reviewer">Đề xuất nhà phản biện</label><p class="help-block">Example block-level help text here.</p>
                    <textarea class="form-control" rows="3" 
                    			placeholder="Nhập đề xuất nhà phản biện"
                    			name="propose_reviewer" id="propose_reviewer"></textarea>
                </div>

                <div class="form-group">
                    <label for="propose_number_public">Mong muốn đăng trên tạp chí số</label><p class="help-block">Example block-level help text here.</p>
                    <input type="text" class="form-control" 
                    		name="propose_number_public" id="propose_number_public"
                    		placeholder="Nhập mong muốn đăng bài viết của bạn trên bài viết số bao nhiêu">
                </div>


				<div class="form-group">
                    <label for="propose_reviewer">Kiến nghị gửi Ban biên tập</label><p class="help-block">Example block-level help text here.</p>
                    <textarea type="text" class="form-control" 
                    		placeholder="Nhập kiến nghị gửi Ban biên tập chúng tôi..."></textarea>
                </div>
               
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <input type="hidden" name="_method" value="PUT" />
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </form>
    </div>


@stop
