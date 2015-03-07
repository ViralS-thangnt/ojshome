@extends('layout.master.master')

@section('title-page-admin')
BẢN THẢO
@stop

@section('title')
Nhập thông tin bản thảo
@stop

@section('content')

<div class="box box-primary">

    <div class="box-header">
        <h3 class="box-title">Thông tin bản thảo</h3>
    </div><!-- /.box-header -->

    <!-- form start -->   
    {!! Form::model($manuscripts, ['route' => ['manuscript.update', $id]]) !!}
    <div class="box-body">
        {!! ErrorDisplay::getInstance()->DisplayAll($errors) !!}

        <div class="form-group">
            {!! Form::label_custom('Thể loại bài viết', ['text-form-large'], true)!!}

            {!! Form::help_block('(Chọn 1 thể loại cho bản thảo)') !!}

            {!! Form::combobox_custom('type', Constant::list_degree(), ['form-control'], false) !!}
        </div>

        <div class="form-group">
            {!! Form::label_custom('Tên bài viết', ['text-form-large'], true)!!}

            {!! Form::help_block('(Nhập tên bài viết. Tối đa 20 từ)') !!}

            {!! Form::textarea_custom('name', '', 5, 'Nhập tên bài viết. Tối đa 20 từ ...' ) !!}
            
        </div>

        <div class="form-group">
            {!! Form::label_custom('Tóm tắt Tiếng Việt', ['text-form-large'], true)!!}

            {!! Form::help_block('Nhập tóm tắt Tiếng Việt. Độ dài từ 150 - 200 từ)') !!}

            {!! Form::textarea_custom('summary_vi', '', 5, '(Nhập tóm tắt Tiếng Việt. Độ dài từ 150 - 200 từ ...' ) !!}
            
        </div>

        <div class="form-group">
            {!! Form::label_custom('Từ khoá Tiếng Việt', ['text-form-large'], true)!!}

            {!! Form::help_block('(Tối đa 3 - 5 từ khoá)') !!}

            {!! Form::combobox_custom('keyword_vi', Constant::list_degree(), ['form-control'], true ) !!}
            
        </div>

        <div class="form-group">
            {!! Form::label_custom('Tóm tắt Tiếng Anh', ['text-form-large'], true)!!}

            {!! Form::help_block('Nhập tóm tắt Tiếng Anh. Độ dài từ 150 - 200 từ)') !!}

            {!! Form::textarea_custom('summary_en', '', 5, 'Nhập tóm tắt Tiếng Anh. Độ dài từ 150 - 200 từ ...' ) !!}
            
        </div>

        <div class="form-group">
            {!! Form::label_custom('Từ khoá Tiếng Anh', ['text-form-large'], true)!!}

            {!! Form::help_block('(Tối đa 3 - 5 từ khoá)') !!}

            {!! Form::combobox_custom('keyword_en', Constant::list_degree(), ['form-control'], true ) !!}
            
        </div>


        <div class="form-group">
            {!! Form::label_custom('Chủ đề bài viết', ['text-form-large'], false)!!}

            {!! Form::help_block('Nhập chủ đề bài viết') !!}

            {!! Form::textarea_custom('topic', '', 5, 'Nhập chủ đề bài viết...' ) !!}
            
        </div>

        <div class="form-group">
            {!! Form::label_custom('Đề xuất nhà phản biện', ['text-form-large'], false)!!}

            {!! Form::help_block('(Bạn hãy ghi rõ tên, thông tin liên lạc với nhà phản biện.)') !!}

            {!! Form::textarea_custom('propose_reviewer', '', 5, 'Nhập đề xuất nhà phản biện. Bạn hãy ghi rõ tên, thông tin liên lạc với nhà phản biện...' ) !!}
            
        </div>

        <div class="form-group">
            {!! Form::label_custom('Mong muốn đăng trên tạp chí số', ['text-form-large'], false)!!}

            {!! Form::help_block('(Bạn muốn đăng bài viết trên tạp chí số bao nhiêu)') !!}

            {!! Form::textarea_custom('expect_journal_id', '', 1, 'Nhập mong muốn đăng bài viết của bạn trên tạp chí số bao nhiêu...' ) !!}
            
        </div>

        <div class="form-group">
            {!! Form::label_custom('Kiến nghị gửi Ban biên tập', ['text-form-large'], false)!!}

            {!! Form::help_block('(Bạn hãy ghi rõ tên, thông tin liên lạc với nhà phản biện.)') !!}

            {!! Form::textarea_custom('recommend', '', 5, 'Nhập kiến nghị gửi Ban biên tập chúng tôi...' ) !!}
            
        </div>

        {!! Form::submit('Gửi bài', ['class' => 'btn btn-primary']) !!}

    </div><!-- /.box-body -->
    

    {!! Form::close() !!}
     
</div><!-- /.box-body -->

@stop
