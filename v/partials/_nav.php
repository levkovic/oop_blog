<nav>

    <a href="index.php">Home</a> |

	<?php if (isset($_SESSION['auth'])) : ?>
    	<a href="index.php?c=editor">Editor</a>
    	<b>Вы вошли как: <?= $_SESSION['auth'] ?></b>
    	<a href="index.php?c=logout">Выход</a>
	<?php else : ?>
		<a href="index.php?c=login">Войти</a> |
		<a href="index.php?c=registration">Регистрация</a>
	<?php endif; ?>

	
</nav>