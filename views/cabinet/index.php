<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3>Кабинет пользователя</h3>
            
            <h4><?php echo $hello; ?>Привет, <?php echo $user['name'];?>!</h4>
            <ul>
                <li><a href="/cabinet/edit">Редактировать данные</a></li>
                <li><a href="/cabinet/history">Список покупок</a></li>
                <li><a href="/cabinet/testpage">Тестовая</a></li>
                <li><a href="/cabinet/testpage2">Тестовая 2</a></li>
                
                <?php if($user['role'] == 'admin') { ?>
                            <li><a href="/admin">Админ</a></li>
                <?php } ?>
                
            <?php
                for ($i=0; $i < count($getResponceArray); $i++) { 
            ?>
                <ul>
                    <li> <?php echo $getResponceArray[$i]['password']; ?> (<?php echo $getResponceArray[$i]['login']; ?> #<?php echo $getResponceArray[$i]['id']; ?>) </li>
                </ul>
            <?php
            }
        ?>
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>