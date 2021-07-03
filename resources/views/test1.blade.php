@foreach ($pro as $pro)
										<tr class="gradeX">
											<form action="test1" method="post">
												@csrf
											
											
											<td>{{$pro->idenseignant}}	<input type="hidden" value="" name="id"></td>
											<td>{{$pro->nomenseignant}}&nbsp;{{$pro->prenomenseignant}}
											</td>
											</form>
											
										
										</tr>
										@endforeach