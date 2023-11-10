@extends('layouts.new')

@section('content')

@if(session('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif

<div class="log">
	<a href="#">ログインはこちら</a>
</div>

<div class="section-title">
	<h1>新規管理ユーザー登録</h1>
</div>

<div class="text-center">
	<form action="route('store')" method="POST" enctype="multipart/form-data">
		@csrf
	
		<div class="form-group">
			<label class="label">ユーザーネーム</label>
			<input type="text"  class="textbox" name="user_name">
		</div>

		<div class="form-group">
			<label class="label">カナ</label>
			<input type="text"  class="textbox" name="user_name">
		</div>

		<div class="form-group">
			<label class="label">メールアドレス</label>
			<input type="text"  class="textbox" name="email">
		</div>

		<div class="form-group">
			<label class="label">パスワード</label>
			<input type="text"  class="textbox" name="password">
		</div>

		<div class="form-group">
			<label class="label">パスワード確認</label>
			<input type="text"  class="textbox" name="password">
		</div>

		<div>
			<input type="submit" class="button" value="登録">
		</div>
	</form>
</div>
@endsection