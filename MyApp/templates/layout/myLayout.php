<main class="main">
    <div class="container">
        <?=$this->Flash->render()?>
    </div>
    <?=$this->Html->css("test.css")?>
    <div class="layout">
        <div class="title">
            <h1 class="princ">Acceuil</h1>
        </div>
    </div>
</main>
<?=$this->fetch('content')?>
