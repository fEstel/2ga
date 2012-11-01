<ul class="pannel">
  <li id="http://conf1.toga-test.com/project/index">

    <h1>Projects List</h1>

    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Ide language</th>
          <th>VCS</th>
          <th>Created at</th>
          <th>Updated at</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($ide_projects as $ide_project): ?>
         <?php if(!$ide_project->getDeletedAt()): ?>
          <tr>
            <td><a href="<?php echo url_for('project/show?id=' . $ide_project->getId()) ?>"><?php echo $ide_project->getName() ?></a></td>
            <td><?php echo $ide_project->getDescription() ?></td>
            <td><?php echo $ide_project->getIdeLanguage()->getName() ?></td>
            <td><?php echo $ide_project->getIdeVcs()->getName() ?></td>
            <td><?php echo $ide_project->getCreatedAt() ?></td>
            <td><?php echo $ide_project->getUpdatedAt() ?></td>
            <td><a href="<?php echo url_for('deploy/index?project=' . $ide_project->getId()) ?>">Deploy</a></td>
            <td><a href="<?php echo url_for('editor/index?project=' . $ide_project->getId()) ?>">Edit</a></td>
            <td><a href="<?php echo url_for("http://" . $ide_project->getName() . "." . $myname . "." . TogaSettings::getServerDomain()) ?>">Demo</a></td>
            <td><a href="<?php echo url_for("http://" . $ide_project->getName() . "." . $myname . "." . TogaSettings::getServerDomain()) . "/frontend_dev.php" ?>">Debug</a></td>
            <td><a href="/project/delete/id/6" onclick="if (confirm('Are you sure?')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '1e25346399661ef5a8c592588a2ba159'); f.appendChild(m);f.submit(); };return false;">Delete</a></td>
          </tr>
          <?php endif;?>
        <?php endforeach; ?>
      </tbody>
    </table>
    <a href="<?php echo url_for('project/new') ?>">New</a>

  </li>
</ul>
