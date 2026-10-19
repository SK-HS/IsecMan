<!DOCTYPE html>
<html lang="en">

@include('layouts._head')

 <body data-spy="scroll" data-offset="80">
<!-- START PRELOADER -->
		<div class="preloaders">
			<span class="#">
				<img width="200" height="200" src="storage/images/logo.jpeg" alt="{{config('app.name')}}">
			</span>
			
		</div>
		{{-- <div class="preloaders">
			<span class="loader"></span>
			
		</div> --}}
		<!-- END PRELOADER -->	
    
   <!-- START NAVBAR --> 
@include('layouts._header')

    <!-- END NAVBAR -->	
    
@yield('content')

<!-- START FOOTER -->
@include('layouts._footer')
	
		<!-- END FOOTER -->	
	

		<!-- START FOOTER COPYRIGHT -->	
		
        @include('layouts._script')
		<!-- END FOOTER COPYRIGHT -->
</body>
</html>