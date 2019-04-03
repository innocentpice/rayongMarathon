<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <div class="content">
        Administrator Management
      </div>
    </h2>
    <form class="ui large form" method="post" action="<?=URL_Path?>/admin">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="username" placeholder="Username">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="ui fluid large teal submit button">Login</div>
      </div>

      <div class="ui error message"></div>

    </form>
  </div>
</div>