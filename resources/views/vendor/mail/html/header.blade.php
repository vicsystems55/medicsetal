<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'MedicsEtAl')
<img src="https://edu.medicsetal.org/wp-content/uploads/2021/12/medicsetal-logo-2-removebg-preview-296x201.png" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
