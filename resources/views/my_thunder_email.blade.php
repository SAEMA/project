 <?php $id = $id -1 ; $total = ($total-1) - ($id * 10);   ?>
		
		<br><br><table class='table table-striped' id = 'mymail'>
		<tr><th>Date</th><th>-</th><th>From --- Subject</th><th>Seen/Unseen</th>

		
			@for ($i = $total; $i > ($total -10) ; $i--)

					@if ( $seen[$i] !=1 )

					<tr>
					<td>{{ $msgno[$i] }} {{ $date[$i] }}</td>
					<td> - </td>
					<td >From {{ $from[$i] }} --- {{$subject[$i]}}</td>
					<td>Unseen</td>
					</tr>
					
					

					@else
					
					<tr>
					<td>{{ $msgno[$i] }} {{ $date[$i] }}</td>
					<td> - </td>
					<td >From {{ $from[$i] }} --- {{$subject[$i]}}</td>
					<td>Seen</td>
					</tr>
					
					

					@endif			

			@endfor
		

			</table>
			<br>


<div id="get_me">


@for ( $j = 1; $j <=$number; $j++ )

 	<button type="submit" name="submit" class="btn btn-primary"  id= '{{ $j }}'>{{ $j }}</button>

@endfor

</div>


		


