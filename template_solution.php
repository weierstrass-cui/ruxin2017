<?php
/*
Template Name:解决方案
*/

get_header(); ?>
  <div class="mo-solution">
    <h3>免费索取策划方案</h3>
    <div class="recorde">最新申请<span>108</span>人 累计已有<span>1588</span>位索取方案</div>
    <form>
      <div class="form">
          <ul>
            <li class="require">
              <label for="name">姓 名</label>
              <input type="text" class="text" id="name" />
            </li>
            <li class="require">
              <label for="phone">手 机</label>
              <input type="num" class="text" id="phone" />
            </li>
            <li class="require">
              <label for="company">公 司</label>
              <input type="text" class="text" id="company" />
            </li>
            <li>
              <label>备 注</label>
              <textarea></textarea>
            </li>
          </ul>
      </div>
      <div class="btns">
        <input type="button" class="submit" value="提交" />
        <input type="reset" class="reset" value="重置" />
      </div>
    </form>
  </div>
<?php get_footer(); ?>
