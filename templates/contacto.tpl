{include file="nav.tpl"}
{include file="header.tpl"}
<h2>Contacto</h2>
<div class="contenedor-form">
	<p>Escribí a “Personajes Notables”.</p>
	<p>Envianos tu consulta o sugerencia.</p>
	<form>
		<label for="nombre">Nombre: </label>
		<input type="text" id="nombre" placeholder="Nombre"/>
		<label for="mail">E-mail: </label>
		<input type="mail" id="mail" placeholder="E-mail"/>
		<label for="mensaje">Mensaje: </label>
		<textarea id="mensaje" rows="10" cols="25" placeholder="Mensaje..."></textarea>
		<button>Enviar</button>
	</form>
</div>
{include file="footer.tpl"}
