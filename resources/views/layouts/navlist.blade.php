@yield('navlist')
<!-- FEATURE LIST -->
<ul class="feature-list">
<?php  $categorynav=\App\Models\Categorys::all(['id','categogry_name']);  ?>
           @foreach($categorynav as $spage)
  <li class="feature-list-item">
  <a href="{{ route('view_items', ['name'=>$spage->categogry_name,'id'=>$spage->id] ) }}">{{$spage->categogry_name}}</a>
  </li>
     @endforeach
</ul>
<!-- /FEATURE LIST -->
