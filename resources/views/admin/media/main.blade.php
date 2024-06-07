@extends('admin.index')
@section('content')
<style>
  .container {
    display: block;
    border: 2px solid brown;
    border-radius: 50%;
    height: 20px;
    width: 20px;
    position: relative
}

.container span {
    position: absolute;
    top: -11px;
    left: 1px;
}
</style>
<div>
  <div class=" Name">
    <h1>Hello, Michael</h1>
    <p>Joined Nov.2023</p>
  </div>
  <div>
    <img src="" alt="">
    <p><span>Michael Alele</span> <br>
      michaelalele@gmail.com
    </p>
    <i class="fa fa-bell"></i>
  </div>
</div>

<div class="media mt-4">
  <div >
    <div class="add border-md shadow-gray-400 shadow-md" style="color: brown;font-size:50px;text-align:center">
      <span class="container"><span style="font-size: 20px;color:brown">+</span></span>
    </div> 
    <div class="add-text">Add Post</div>
  </div>
  <div class="mind border-gray-600 shadow-md">
    What is going on today
  </div>
</div>
<div class="media-files">
  <div class="post-media">
    <img src="../assets/images/post/post-1.png" alt="">
  </div>
  <div class="post-media">
    <img src="../assets/images/post/post-2.png" alt="">
  </div>
  <div class="post-media">
    <img src="../assets/images/post/post-3.png" alt="">
  </div>
  <div class="post-media">
    <img src="../assets/images/post/post-1.png" alt="">
  </div>
  <div class="post-media">
    <img src="../assets/images/post/post-2.png" alt="">
  </div>
  <div class="post-media">
    <img src="../assets/images/post/post-3.png" alt="">
  </div>
</div>


@endsection