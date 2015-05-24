<section id="main">
    <div class="page-header">
        <ul>
            <li><i class="fa fa-folder fa-fw"></i><?= $this->url->link(t('All projects'), 'project', 'index') ?></li>
        </ul>
    </div>
    <section>
    <form method="post" action="<?= $this->url->href('project', 'save') ?>" autocomplete="off">

        <?= $this->form->csrf() ?>
        <?= $this->form->hidden('is_private', $values) ?>
        <?= $this->form->label(t('Name'), 'name') ?>
        <?= $this->form->text('name', $values, $errors, array('autofocus', 'required', 'maxlength="50"')) ?>

        <div class="form-actions">
            <input type="submit" value="<?= t('Save') ?>" class="btn btn-blue"/>
            <?= t('or') ?> <?= $this->url->link(t('cancel'), 'project', 'index') ?>
        </div>
    </form>
    </section>
</section>