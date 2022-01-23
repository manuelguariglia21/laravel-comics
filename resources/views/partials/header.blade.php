<header>
  <div class="container flex-box">
    <div>
      <img src="{{asset('images/dc-logo.png') }}" alt="logo">
    </div>
    <nav>
      <ul>
        {{-- <li @click="handleClick(menu, index)" v-for="(link, index) in menu" :key="index" ><a href="#" ><span :class="{'active': link.current === true}">{{link.text}}</span></a></li> Vue --}}
        <li><a href="#"><span>Characters</span></a></li>
        <li><a href="#"><span>Comics</span></a></li>
        <li><a href="#"><span>Movies</span></a></li>
        <li><a href="#"><span>Tv</span></a></li>
        <li><a href="#"><span>Games</span></a></li>
        <li><a href="#"><span>Collectibles</span></a></li>
        <li><a href="#"><span>Videos</span></a></li>
        <li><a href="#"><span>Fans</span></a></li>
        <li><a href="#"><span>News</span></a></li>
        <li><a href="#"><span>Shop</span></a></li>
      </ul>
    </nav>
  </div>
</header>