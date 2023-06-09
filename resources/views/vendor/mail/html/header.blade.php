<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{asset('images/innotive.png')}}" class="logo" alt="Innotive Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
