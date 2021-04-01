@include('indexheader')
<div class="col-md-12">
		<h4 class="product_header  recent_pro_header">{{ url().' $pagesrequest->title '}}</h4>
		<div class="wht_we_do">{{ url().' !! $pagesrequest->content !! '}}
	</div>
	</div>

@include('indexfooter')