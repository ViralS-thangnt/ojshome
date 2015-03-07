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

        @if($errors->has())
        <div class="alert alert-danger">
            <h4>Please fix errors:</h4>
            @foreach($errors->all() as $error)
                {{ $error }} <br />
            @endforeach
        </div>
        @endif

        <!-- form start -->
        <form role="form" action="{{ url('/admin/manuscript') }}" method="POST">
            <div class="box-body">
                <div class="form-group">
                    <label for="type" style="font-size: large">Thể loại bài viết  (<span style="color: red">*</span>)</label>
                    <select class="form-control" id="type" name="type">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Tên bài viết</label><p class="help-block">(Nhập tên bài viết. Tối đa 20 từ)</p>
                    <textarea class="form-control" rows="3" 
                    			placeholder="Nhập tên bài viết. Tối đa 20 từ ..."
                    			name="name" id="name"></textarea>
                </div>

                <div class="form-group">
                    <label for="summary_vn">Tóm tắt Tiếng Việt</label><p class="help-block">(Nhập tóm tắt Tiếng Việt. Độ dài từ 150 - 200 từ)</p>
                    <textarea class="form-control" rows="3" 
                    			placeholder="Nhập tóm tắt Tiếng Việt. Độ dài từ 150 - 200 từ ..."
                    			name="summary_vn" id="summary_vn"></textarea>
                </div>

                <div class="form-group">
                    <label>Từ khoá Tiếng Việt </label><p class="help-block">(Tối đa 3 - 5 từ)</p>
                    <select multiple="" class="form-control" name="keyword_vn" id="keyword_vn">
                        <!-- Get from database or constant-->
                        <option>Công nghệ</option>
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
                    <label for="summary_en">Tóm tắt Tiếng Anh</label><p class="help-block">(Nhập tóm tắt Tiếng Anh. Độ dài từ 150 - 200 từ)</p>
                    <textarea class="form-control" rows="3" 
                    			placeholder="Nhập tóm tắt Tiếng Anh. Độ dài từ 150 - 200 từ ..."
                    			name="summary_en" id="summary_en"></textarea>
                </div>


                <div class="form-group">
                    <label>Từ khoá Tiếng Anh (3 - 5 từ)</label><p class="help-block">(Tối đa 3 - 5 từ)</p>
                    <select multiple="" class="form-control" name="keyword_en" id="keyword_en">
                         <!-- Get from database or constant-->
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
                    <label for="topic">Chủ đề bài viết</label>
                    <textarea class="form-control" rows="3" 
                    			placeholder="Nhập chủ đề bài viết"
                    			name="topic" id="topic"></textarea>
                </div>

                <div class="form-group">
                    <label for="propose_reviewer">Đề xuất nhà phản biện</label><p class="help-block">(Bạn hãy ghi rõ tên, thông tin liên lạc với nhà phản biện.)</p>
                    <textarea class="form-control" rows="3" 
                    			placeholder="Nhập đề xuất nhà phản biện. Bạn hãy ghi rõ tên, thông tin liên lạc với nhà phản biện."
                    			name="propose_reviewer" id="propose_reviewer"></textarea>
                </div>

                <div class="form-group">
                    <label for="expect_journal_id">Mong muốn đăng trên tạp chí số</label>
                    <input type="text" class="form-control" 
                    		name="expect_journal_id" id="expect_journal_id"
                    		placeholder="Nhập mong muốn đăng bài viết của bạn trên bài viết số bao nhiêu">
                </div>


				<div class="form-group">
                    <label for="propose_reviewer">Kiến nghị gửi Ban biên tập</label>
                    <textarea type="text" class="form-control" 
                    		placeholder="Nhập kiến nghị gửi Ban biên tập chúng tôi..."></textarea>
                </div>
               
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </form>
    </div>


@stop
