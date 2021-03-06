
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->element('head') ?>
</head>
<body>
    <?= $this->element('header') ?>
    <!-- Page Content -->
    <div id="content" class="container">
        <?= $this->Flash->render() ?>
        <div class="row" id="MainDiv">
            <?= $this->fetch('content') ?>

        </div>
    </div>
    <?= $this->element('footer') ?>
</body>
</html>