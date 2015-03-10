@extends('layout.master.master')

@section('title-page-admin')
{!! Lang::get('admin.title_page_admin') !!}
@stop

@section('title')
{!! Lang::get('admin.manuscript_info')  !!}
@stop

<!-- Content -->
@section('content')

<!-- form start -->   
{!! Form::model($manuscripts, ['route' => ['manuscript.update', $id], 'enctype' => 'multipart/form-data'] ) !!}

<!-- <div class="box box-primary"> -->
{!! Form::div_open('box box-primary padding-box') !!}
	
	<!-- box-header -->
	{!! Form::div_open('box-header') !!}
		{!! Form::h_custom(3, Lang::get('admin.manuscript_info'), 'box-title') !!}
	{!! Form::div_close() !!}<!-- /.box-header -->
	
	
	{!! Form::div_open('box-body') !!}
	
		{!! ErrorDisplay::getInstance()->DisplayAll($errors) !!}

		{!! Form::div_open('form-group') !!}
			{!! Form::label_custom('Thể loại bài viết', 'text-form-large', true) !!}

			{!! Form::help_block('(Chọn 1 thể loại cho bản thảo)') !!}

			{!! Form::combobox_custom('type', ['A', 'B', 'C', 'D', 'E', 'F'], 'form-control', false) !!}
		{!! Form::div_close() !!}


		{!! Form::div_open('form-group') !!}
			{!! Form::label_custom('Tên bài viết', 'text-form-large', true)!!}

			{!! Form::help_block('(Nhập tên bài viết. Tối đa 20 từ)') !!}

			{!! Form::textarea_custom('name', '', 5, 'Nhập tên bài viết. Tối đa 20 từ ...' ) !!}
			
		{!! Form::div_close() !!}

		{!! Form::div_open('form-group') !!}
			{!! Form::label_custom('Tóm tắt Tiếng Việt', 'text-form-large', true)!!}

			{!! Form::help_block('(Nhập tóm tắt Tiếng Việt. Độ dài từ 150 - 200 từ)') !!}

			{!! Form::textarea_custom('summary_vi', '', 5, '(Nhập tóm tắt Tiếng Việt. Độ dài từ 150 - 200 từ ...' ) !!}
			
		{!! Form::div_close() !!}


		{!! Form::div_open('form-group') !!}
			{!! Form::label_custom('Từ khoá Tiếng Việt', 'text-form-large', true)!!}

			{!! Form::help_block('(Tối đa 3 - 5 từ khoá)') !!}

			{!! Form::combobox_custom('keyword_vi', ['A', 'B', 'C', 'D', 'E', 'F'], 'form-control', true ) !!}
			
		{!! Form::div_close() !!}


		{!! Form::div_open('form-group') !!}
			{!! Form::label_custom('Tóm tắt Tiếng Anh', 'text-form-large', true)!!}

			{!! Form::help_block('(Nhập tóm tắt Tiếng Anh. Độ dài từ 150 - 200 từ)') !!}

			{!! Form::textarea_custom('summary_en', '', 5, 'Nhập tóm tắt Tiếng Anh. Độ dài từ 150 - 200 từ ...' ) !!}
			
		{!! Form::div_close() !!}


		{!! Form::div_open('form-group') !!}
			{!! Form::label_custom('Từ khoá Tiếng Anh', 'text-form-large', true)!!}

			{!! Form::help_block('(Tối đa 3 - 5 từ khoá)') !!}

			{!! Form::combobox_custom('keyword_en', ['A', 'B', 'C', 'D', 'E', 'F'], 'form-control', true ) !!}
			
		{!! Form::div_close() !!}


		{!! Form::div_open('form-group') !!}
			{!! Form::label_custom('Chủ đề bài viết', 'text-form-large', false)!!}

			{!! Form::textarea_custom('topic', '', 5, 'Nhập chủ đề bài viết...' ) !!}
			
		{!! Form::div_close() !!}


		{!! Form::div_open('form-group') !!}
			{!! Form::label_custom('Đề xuất nhà phản biện', 'text-form-large', false)!!}

			{!! Form::help_block('(Bạn hãy ghi rõ tên, thông tin liên lạc với nhà phản biện.)') !!}

			{!! Form::textarea_custom('propose_reviewer', '', 5, 'Nhập đề xuất nhà phản biện. Bạn hãy ghi rõ tên, thông tin liên lạc với nhà phản biện...' ) !!}
			
		{!! Form::div_close() !!}

		{!! Form::div_open('form-group') !!}
			{!! Form::label_custom('Mong muốn đăng trên tạp chí số', 'text-form-large', false)!!}

			{!! Form::help_block('(Bạn muốn đăng bài viết trên tạp chí số bao nhiêu)') !!}

			{!! Form::textarea_custom('expect_journal_id', '', 1, 'Nhập mong muốn đăng bài viết của bạn trên tạp chí số bao nhiêu...' ) !!}
			
		{!! Form::div_close() !!}


		{!! Form::div_open('form-group') !!}
			{!! Form::label_custom('Kiến nghị gửi Ban biên tập', 'text-form-large', false)!!}

			{!! Form::textarea_custom('recommend', '', 5, 'Nhập kiến nghị gửi Ban biên tập chúng tôi...' ) !!}
			
		{!! Form::div_close() !!}

		

	{!! Form::div_close() !!}<!-- end .box-body -->
	
{!! Form::div_close() !!}<!-- /.box box-primary -->



<!-- Author -->
{!! Form::div_open('box box-primary') !!}
	<!-- box-header -->
	{!! Form::div_open('box-header padding-box') !!}
		{!! Form::h_custom(3, 'Thông tin tác giả', 'box-title') !!}
	{!! Form::div_close() !!}<!-- /.box-header -->

	<!-- box-body -->
	{!! Form::div_open('box-body') !!}

		{!! Form::div_open('form-group') !!}

			{!! Form::label_custom('Thông tin đồng tác giả (nếu có)', 'text-form-large', false)!!}

			{!! Form::help_block('(Bạn hãy ghi rõ thông tin của đồng tác giả nếu có)') !!}

			{!! Form::textarea_custom('co_author', '', 5, 'Bạn hãy nhập thông tin của đồng tác giả nếu có...' ) !!}
		
		{!! Form::div_close() !!}

	{!! Form::div_close() !!}

{!! Form::div_close() !!}<!-- /.box box-primary -->


<!-- Upload file -->
{!! Form::div_open('box box-primary') !!}
	<!-- box-header -->
	{!! Form::div_open('box-header padding-box') !!}
			{!! Form::h_custom(3, 'Tải lên tài liệu', 'box-title') !!}
	{!! Form::div_close() !!}<!-- /.box-header -->	

	
	<!-- box-body -->
	{!! Form::div_open('box-body') !!}

		{!! Form::div_open('form-group') !!}

			{!! Form::file('file') !!}

		{!! Form::div_close() !!}

	{!! Form::div_close() !!}

{!! Form::div_close() !!}<!-- /.box box-primary -->



<!-- Confirm -->
{!! Form::div_open('box box-primary padding-box') !!}
	<!-- box-header -->
	{!! Form::div_open('box-header') !!}
		{!! Form::h_custom(3, 'Chính sách và điều khoản', 'box-title') !!}
	{!! Form::div_close() !!}<!-- /.box-header -->

	<!-- box-body -->
	{!! Form::div_open('box-body') !!}

		{!! Form::ul_custom(['Tôi đã đọc và đồng ý với các điều khoản và chính sách của ban biên tập']) !!}

		{!! Form::radio('confirm', 1, true, ['class' => 'field']) !!} Đồng ý 
		{!! Form::radio('confirm', 0, true, ['class' => 'field']) !!} Không đồng ý

	{!! Form::div_close() !!}

{!! Form::div_close() !!}<!-- /.box box-primary -->
	

<!-- Submit	 -->
{!! Form::submit('Gửi bài', ['class' => 'btn btn-primary']) !!}

<!-- End form -->
{!! Form::close() !!}
@stop
