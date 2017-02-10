@extends('layouts.app') 

@section('sider')
@include('common.sider')
@endsection

@section('content')
	<article>
		<div class="main-content">
			<h1>智能排课</h1>
			<p>
				<a name="introduction"></a>
			</p>
			<h2>简介</h2>
  <p>学员选班排课，系统自动检测排课冲突，有效避免撞课现象，解决传统排课繁杂问题。</p>
  <br><br>
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><ul><li style="list-style: none;"><a href="#introduction">John</a></li></ul></td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td><ul><li style="list-style: none;"><a href="#introduction">Mary</a></li></ul></td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td><ul><li style="list-style: none;"><a href="#introduction">July</a></li></ul></td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

	</article>
@endsection
