
@extends('layouts.default')
@section('content')
 @foreach ($users as $user)
       Hello {{ $user->name }} ,
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="group">
      <article class="one_third first">
        <h6 class="heading font-x2">Morbi consequat</h6>
        <p>Suspendisse sed dolor ultricies leo laoreet convallis sed ut ligula nulla maecenas rhoncus tincidunt ex ut fermentum magna eget felis auctor blandit donec purus</p>
        <p class="btmspace-30">Est dignissim at justo id aliquam efficitur nisi aenean hendrerit odio eu mauris.</p>
        <footer><a class="btn" href="#">Read More &raquo;</a></footer>
      </article>
      <div class="two_third">
        <ul class="nospace group elements">
          <li class="one_half first">
            <article><a href="#"><i class="fa fa-legal"></i></a>
              <h6 class="heading">Ornare ultriciese</h6>
              <p>Elementum sollicitudin etiam augue dolor dapibus sit amet lectus quis imperdiet [&hellip;]</p>
              <footer><a href="#">View Details &raquo;</a></footer>
            </article>
          </li>
          <li class="one_half">
            <article><a href="#"><i class="fa fa-language"></i></a>
              <h6 class="heading">Bibendum leo sed</h6>
              <p>Fringilla mi maecenas at mattis orci quis egestas enim proin consectetur erat in [&hellip;]</p>
              <footer><a href="#">View Details &raquo;</a></footer>
            </article>
          </li>
          <li class="one_half first">
            <article><a href="#"><i class="fa fa-low-vision"></i></a>
              <h6 class="heading">Sodales massa sed</h6>
              <p>Nunc porta vel tempus ex scelerisque donec gravida gravida faucibus maecenas dignissim [&hellip;]</p>
              <footer><a href="#">View Details &raquo;</a></footer>
            </article>
          </li>
          <li class="one_half">
            <article><a href="#"><i class="fa fa-audio-description"></i></a>
              <h6 class="heading">Lorem gravida blandite</h6>
              <p>Dui eget elit semper in lacinia arcu condimentum morbi vitae arcu pulvinar suscipit [&hellip;]</p>
              <footer><a href="#">View Details &raquo;</a></footer>
            </article>
          </li>
        </ul>
      </div>
    </div>
   
    <div class="clear"></div>
  </main>
</div>
@endforeach
{{ $users->links() }}

@stop