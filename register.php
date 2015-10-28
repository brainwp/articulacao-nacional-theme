<?php
/**
 * Template name: Page Register
 *
 */
get_header();
?>
<div class="sleeve_main">
	<div id="main">
		<h2><?php the_title(); ?></h2>

		<ul id="postlist">
			<h2 class="titulo">
				Já possui conta? Então <a href="<?php echo wp_login_url();?>">faça login</a>!
			</h2><!-- .hentry -->
			<p>
				Redefinir senha? <a href="<?php echo wp_lostpassword_url();?>">Clique aqui</a>!
			</p><!-- .hentry -->
			<li class="hentry">
				<form action="<?php echo home_url();?>?do_register=true" id="form-register" method="POST">
					<label>
						Nome completo:
						<input type="text" name="name" required>
					</label>
					<label>
						Telefone:
						<input type="text" name="fone" required pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}">
					</label>
					<label>
						E-mail / Nome de usuário:
						<input type="email" name="email" required>
					</label>
					<label>
						Senha:
						<input type="password" name="password" id="password-1" required>
					</label>
					<label>
						Digite a senha novamente:
						<input type="password" name="password" id="password-2" required>
					</label>
					<input type="hidden" name="is_form_register" value="true">
					<br>
					<button>Cadastrar</button>
				</form><!-- #form-register -->
			</li><!-- .hentry -->
		</ul>

	</div> <!-- main -->

</div> <!-- sleeve -->

<?php get_footer(); ?>
