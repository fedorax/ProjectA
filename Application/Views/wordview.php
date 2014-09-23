<?php
class WordView extends BaseView
{
    private function renderList()
    {
		if($this->model->tableList)
		{
			?>
      <div class="row">
      <a href="Word?Act=new" class="pull-right btn btn-primary">新規登録</a>
      </div>
		     <div class="row">
		        <table class="table">
		          <thead>
		            <tr>
		              <td>#</td>
		              <td>物理名</td>
		              <td>論理名</td>
		              <td>&nbsp;</td>
		            </tr>
		          </thead>
		          <tbody>
		<?php
		          for($i=0; $i<count($this->model->tableList); $i++)
		          {
		            echo "<tr>";
		            for($j=0; $j<count($this->model->tableList[$i]); $j++)
		            {
		                echo "<td>".$this->model->tableList[$i][$j]."</td>";
		            }
		            echo "</tr>";
		          }
		?>
		          </tbody>
		        </table>
		      </div>
<?php
		}
    }
    public function renderAdd()
    {
?>
      <form action="word" method="post" class="form-horizontal" role="form">
        <div class="form-group">
          <label for="logicName" class="col-sm-2 control-label">物理名:</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="logicName" id="logicName" placeholder="物理名" value="">
          </div>
        </div>
        <div class="form-group">
          <label for="physicName" class="col-sm-2 control-label">論理名:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control"  name="physicName" id="physicName" placeholder="論理名" value="">
          </div>
        </div>
        <div class="form-group">
          <div class="controls col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary col-sm-5">Submit</button>
            <div class="col-sm-2"></div>
            <button type="button" class="btn col-sm-5">Cancel</button>
          </div>
        </div>
      </form>
<?php
    }
	public function render()
	{
	    setHeader(PROJECT_NAME);
?>
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="page-header">
        <h1>Word</h1>
      </div>
      <?php
      if($this->control->action == "NewAction")
      {
        self::renderAdd();
      }
      else
      {
        $this->renderList();
      }
      ?>

<?php
    setFooter();
	}
}
?>
