<?php
/*
Template Name:联系我们
*/

get_header(); ?>
  <!-- Google Map -->
    <div class="map map--mod">
      <div id="google-map" class="map_model"></div>
      <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=XFlN2d9baquSF783EH7wtzrdaiZQpbhQ"></script>
      <script type="text/javascript">
        // 百度地图API功能
        var map = new BMap.Map("google-map");    // 创建Map实例
        var point = new BMap.Point(121.519496,31.090085);
        var marker = new BMap.Marker(point);  // 创建标注
        map.centerAndZoom(point, 16);  // 初始化地图,设置中心点坐标和地图级别
        var opts = {
          width : 200,     // 信息窗口宽度
          height: 100,     // 信息窗口高度
          title : "骁懿国际" , // 信息窗口标题
        }
        var infoWindow = new BMap.InfoWindow("地址：恒南路1325号(闿鑫商务)B座306室", opts);  // 创建信息窗口对象 
        marker.addEventListener("click", function(){          
          map.openInfoWindow(infoWindow, point); //开启信息窗口
        });
        map.addOverlay(marker);              // 将标注添加到地图中
        map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
        map.setCurrentCity("上海");          // 设置地图显示的城市 此项是必须设置的
      </script>
    </div>
    <!-- END Google Map -->

    <!-- Contacts -->
    <section id="contacts" class="well-4 well-4--inset-1">
      <div class="container container-wide">
        <h1>联 系 我 们</h1>
        <div class="divider divider-default"></div>
        <form class='rd-mailform' method="post" action="#" onsubmit="return false;">
          <!-- END RD Mailform Type -->

          <div class="form-group">
            <label class="form-label" data-add-placeholder for="mailform-input-name">姓名</label>
            <input id="mailform-input-name" type="text" name="author" data-constraints="@NotEmpty"/>
          </div>

          <div class="form-group">
            <label class="form-label" data-add-placeholder for="mailform-input-phone">电话</label>
            <input id="mailform-input-phone" type="text" name="phone" data-constraints="@Phone"/>
          </div>

          <div class="form-group textarea">
            <label class="form-label" data-add-placeholder for="mailform-input-textarea">咨询 / 留言</label>
            <textarea id="mailform-input-textarea" name="message" data-constraints="@NotEmpty"></textarea>
          </div>
          <input class="form-control" type="hidden" name="comment_post_ID" value="1">
          <input class="form-control" type="hidden" name="comment_parent" value="0">

          <div class="form-group btn-wr">
            <button class="btn btn-sm btn-sm--mod btn-danger" id="submit" type="submit">发送给我们</button>
            <div class="mfInfo"></div>
          </div>
        </form>
      </div>
    </section>
    <!-- END Contacts-->
<?php get_footer(); ?>
