<form action="{{Route('auditoria.destroy',$key->id)}}" method="post" onclick="return confirm('¿Está seguro que desea eliminar esta auditoría?'" style="display: inline-block;">
	{{ csrf_field() }}
	{{ method_field('DELETE') }}
	<input type="submit" class="btn btn-claro-danger btn-danger fw-bold" value="Eliminar">
</form>