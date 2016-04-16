<div class="row">
	<div class="col s8 offset-s2">
		 <ul class="pagination">

			@for($i=1;$i<=$lastPage;$i++)
				@if($i == 1)
					@if($currentPage>1)
						<li class="disabled"><a href="/blog/page/{{$currentPage-1}}"><i class="material-icons">chevron_left</i></a></li>
					@endif
				@endif
				@if($i == $currentPage)
					<li class="waves active"><a href="/blog/page/{{$i}}">{{$i}}</a></li>
				@else
					 <li class="waves"><a href="/blog/page/{{$i}}">{{$i}}</a></li>
				@endif

				@if($i == $toplamSayfa)
					@if($currentPage<$lastPage)
						 <li class="waves"><a href="/blog/page/{{$currentPage+1}}"><i class="material-icons">chevron_right</i></a></li>
					@endif
				@endif
			@endfor
		</ul>
	</div>
</div>
