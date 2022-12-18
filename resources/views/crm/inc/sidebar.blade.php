<div class="site-menubar">
	<ul class="site-menu">
		<li class="site-menu-item has-sub active open">
			<a href="{{ route('admin.index') }}">
				<i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
				<span class="site-menu-title">Dashboard</span>
			</a>
		</li>

		@php
		$allMenu = App\Models\MenuModel::where('parent_id', null)->where('active', true)->get();
		@endphp

		@foreach ($allMenu as $menu)

		<li class="site-menu-item has-sub">
			<a href="{!! !$menu->has_child ? url($menu->route) : 'javascript:void(0)' !!}">
				<i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>

				<span class="site-menu-title">{{ $menu->menu }}</span>

				@if ($menu->has_child)<span class="site-menu-arrow"></span>@endif
			</a>

			<!------- Menu sub-level 1 starts ------->
			@if ($menu->has_child)

			<ul class="site-menu-sub">
				@php
				$allMenuSubLevel1 = App\Models\MenuModel::where('parent_id', $menu->id)->where('active', true)->get();
				@endphp

				@foreach ($allMenuSubLevel1 as $menuLevel1)
				
				<li class="site-menu-item">
					<a class="animsition-link" href="{{ url($menuLevel1->route) }}">
						<span class="site-menu-title">{{ $menuLevel1->menu }}</span>
					</a>
				</li>
				@endforeach
			</ul>

			@endif
			<!------- Menu sub-level 1 ends ------->
		</li>

		@endforeach
	</ul>
</div>
	
{{-- <div class="site-gridmenu">
	<div>
		<div>
			<ul>
				<li>
					<a href="../apps/mailbox/mailbox.html">
						<i class="icon wb-envelope"></i>
						<span>Mailbox</span>
					</a>
				</li>
				<li>
					<a href="../apps/calendar/calendar.html">
						<i class="icon wb-calendar"></i>
						<span>Calendar</span>
					</a>
				</li>
				<li>
					<a href="../apps/contacts/contacts.html">
						<i class="icon wb-user"></i>
						<span>Contacts</span>
					</a>
				</li>
				<li>
					<a href="../apps/media/overview.html">
						<i class="icon wb-camera"></i>
						<span>Media</span>
					</a>
				</li>
				<li>
					<a href="../apps/documents/categories.html">
						<i class="icon wb-order"></i>
						<span>Documents</span>
					</a>
				</li>
				<li>
					<a href="../apps/projects/projects.html">
						<i class="icon wb-image"></i>
						<span>Project</span>
					</a>
				</li>
				<li>
					<a href="../apps/forum/forum.html">
						<i class="icon wb-chat-group"></i>
						<span>Forum</span>
					</a>
				</li>
				<li>
					<a href="../index.html">
						<i class="icon wb-dashboard"></i>
						<span>Dashboard</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div> --}}