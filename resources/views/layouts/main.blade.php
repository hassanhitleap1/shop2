<!DOCTYPE HTML>
<html lang="en-US">

<!-- Mirrored from demo.7uptheme.com/html/smartbuy/home-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Aug 2018 13:32:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('sections.head')
<body>
<div class="wrap">
    @include('sections.header')
    <!-- End Header -->
    <div id="content">
        	<div class="box-search">
					<form class="search-form search-form6 clearfix" action="{{url('/')}}" method="GET">
						<input type="text"   name="search" placeholder="Search" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
						<div class="submit-from">
							<input type="submit" value="">
						</div>
					</form>
				</div>
        <div class="content">
            @yield('content')
        </div>
    </div>

    <!-- End Content -->
    @include('sections.footer')
    <!-- End Footer -->
</div>
@include('sections.js')
</body>

<!-- Mirrored from demo.7uptheme.com/html/smartbuy/home-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Aug 2018 13:32:38 GMT -->
</html>


