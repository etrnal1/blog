
  @extends('layouts.default')
  @section('title','主页')
  @section('content')
    <div class="jumbotron">
        <h1>hello Laravel</h1>
          <p class="lead">

            一个世界<a href=""></a>
          </p>
          <p>一切将从这里开始</p>
          <p>

            <a  class ="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
          </p>




    </div>

    @stop
