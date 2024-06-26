<?php
/* Smarty version 3.1.38, created on 2024-04-09 08:26:52
  from '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/Lbox_map_tour_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6614995c4ac689_35068849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1494c07354e6e4def8dade9e1aae381be507be7d' => 
    array (
      0 => '/home/isocms/domains/isocms.com/private_html/admin/isocms/templates/default/blocks/Lbox_map_tour_new.tpl',
      1 => 1709253984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614995c4ac689_35068849 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="map_detail"></div>

<style type="text/css">
	.map_location_des{display: inline-block; width: 100%; height: 250px;position: relative}
	#map_detail{width: 100%; height: 100%; position: absolute; left: 0; top: 0;}
	#map_detail .leaflet-map-pane{width: 100%; height: 100%;}
	#map_detail .leaflet-control-container{width: 100%; height: 100%;}
	.map_box{
		position: relative;
	}
	 .map_box .show_map_box{
		position:absolute;
		 top: 10px;
		right: 10px;
		 width: 180px;
		 height: 44px;
		 line-height: 44px;
		text-align: center;
		 background: #fff;
		 color: #238ba4;
		 z-index: 999;
		 border-radius: 22px;
		 cursor: pointer
	}
	 .map_box .show_map_box i{
		font-size: 20px;
		 margin-right: 5px;
		 vertical-align: middle
	}
</style>



<?php echo '<script'; ?>
 type="text/javascript">
	let h =<?php echo $_smarty_tpl->tpl_vars['h']->value;?>
;
	let u = <?php echo $_smarty_tpl->tpl_vars['u']->value;?>
;
	var mymap = L.map("map_detail");
	setTimeout(function () {
	loadMapbox();
	}, 1000);
function getDataMap(tour_id){
	$.ajax({
		type: "POST",
		url: path_ajax_script + '/?mod=' + mod + '&act=ajaxGetDataMap',
		data: { "tour_id": tour_id },
		dataType: "json",
		success: function (res) {
			if(res.result){
				let data = res.data;
				let h =data.h;
				let u = data.u;
				console.log(h[0].place_x);
				var mymap = L.map("map_detail");
				setTimeout(function () {
					loadMapbox();
				}, 1000);
			}
			
		}
	});
}
function loadMapbox(){
	1 == h.length
	  ? mymap.setView(
		  L.latLng(parseFloat(h[0].place_x), parseFloat(h[0].place_y)),
		  h[0].place_zoom
		)
	  : mymap.fitBounds(u, {
		  padding: [20, 20]
		});
	var addLocations = function (h) {
	  (t = L.icon({
		iconUrl: URL_IMAGES+"/map_icon/destination-map-new.svg",
		iconSize: [11, 11],
		iconAnchor: [5, 5],
		popupAnchor: [0, -10]
	  })),
		(i = L.icon({
		  iconUrl: URL_IMAGES+"/map_icon/start-map-new.svg",
		  iconSize: [16, 16],
		  iconAnchor: [8, 8],
		  popupAnchor: [0, -15]
		})),
		(e = L.icon({
		  iconUrl: URL_IMAGES+"/map_icon/end-map-new.svg",
		  iconSize: [16, 16],
		  iconAnchor: [8, 8],
		  popupAnchor: [0, -15]
		})),
		(n = L.icon({
		  iconUrl:
			URL_IMAGES+"/map_icon/runner-new.svg?v=1",
		  iconSize: [10, 10],
		  iconAnchor: [5, 5]
		}));
	};
	L.tileLayer(
	  "https://api.mapbox.com/styles/v1/mapbox/outdoors-v11/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibG9pdmlldGlzbyIsImEiOiJja2tnYzV4YTExMXN2MnZtbjRlOHl5aXYzIn0.xd4gCsW5At6IRIlf8lU6Jw", {
		attribution: '&copy; <a href="https://www.mapbox.com/about/maps/">Mapbox</a> &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
		id: "mapbox.streets",
		accessToken: "pk.eyJ1IjoibG9pdmlldGlzbyIsImEiOiJja2tnYzV4YTExMXN2MnZtbjRlOHl5aXYzIn0.xd4gCsW5At6IRIlf8lU6Jw"
	  }
	).addTo(mymap);
	addLocations(h);
	(r = []),
	  h.forEach(function (n, s) {
		if (!isNaN(parseFloat(n.place_x)) && !isNaN(parseFloat(n.place_y))) {
		  var a = [parseFloat(n.place_x), parseFloat(n.place_y)],
			l = t;
		  0 === s && (l = i), s === h.length - 1 && (l = e);
		  var c = L.marker(a, {
			icon: l
		  }).addTo(mymap);
		  u.push(a),
			c.bindPopup(n.place_name),
			(r[n.place_id] = c);
		}
	  });

	L.polyline(u, {
	  color: "#409CD1",
	  weight: 2,
	  opacity: 1
	}).addTo(mymap);
	L.interpolatePosition = function (t, i, e, n) {
	  var o = n / e;
	  return (
		(o = (o = o > 0 ? o : 0) > 1 ? 1 : o),
		L.latLng(t.lat + o * (i.lat - t.lat), t.lng + o * (i.lng - t.lng))
	  );
	};

	(L.Marker.MovingMarker = L.Marker.extend({
	  statics: {
		notStartedState: 0,
		endedState: 1,
		pausedState: 2,
		runState: 3
	  },
	  options: {
		autostart: !1,
		loop: !1
	  },
	  initialize: function (t, i, e) {
		L.Marker.prototype.initialize.call(this, t[0], e),
		  (this._latlngs = t.map(function (t, i) {
			return L.latLng(t);
		  })),
		  i instanceof Array
			? (this._durations = i)
			: (this._durations = this._createDurations(this._latlngs, i)),
		  (this._currentDuration = 0),
		  (this._currentIndex = 0),
		  (this._state = L.Marker.MovingMarker.notStartedState),
		  (this._startTime = 0),
		  (this._startTimeStamp = 0),
		  (this._pauseStartTime = 0),
		  (this._animId = 0),
		  (this._animRequested = !1),
		  (this._currentLine = []),
		  (this._stations = {});
	  },
	  isRunning: function () {
		return this._state === L.Marker.MovingMarker.runState;
	  },
	  isEnded: function () {
		return this._state === L.Marker.MovingMarker.endedState;
	  },
	  isStarted: function () {
		return this._state !== L.Marker.MovingMarker.notStartedState;
	  },
	  isPaused: function () {
		return this._state === L.Marker.MovingMarker.pausedState;
	  },
	  start: function () {
		this.isRunning() ||
		  (this.isPaused()
			? this.resume()
			: (this._loadLine(0), this._startAnimation(), this.fire("start")));
	  },
	  resume: function () {
		this.isPaused() &&
		  ((this._currentLine[0] = this.getLatLng()),
		  (this._currentDuration -= this._pauseStartTime - this._startTime),
		  this._startAnimation());
	  },
	  pause: function () {
		this.isRunning() &&
		  ((this._pauseStartTime = Date.now()),
		  (this._state = L.Marker.MovingMarker.pausedState),
		  this._stopAnimation(),
		  this._updatePosition());
	  },
	  stop: function (t) {
		this.isEnded() ||
		  (this._stopAnimation(),
		  void 0 === t && ((t = 0), this._updatePosition()),
		  (this._state = L.Marker.MovingMarker.endedState),
		  this.fire("end", {
			elapsedTime: t
		  }));
	  },
	  addLatLng: function (t, i) {
		this._latlngs.push(L.latLng(t)), this._durations.push(i);
	  },
	  moveTo: function (t, i) {
		this._stopAnimation(),
		  (this._latlngs = [this.getLatLng(), L.latLng(t)]),
		  (this._durations = [i]),
		  (this._state = L.Marker.MovingMarker.notStartedState),
		  this.start(),
		  (this.options.loop = !1);
	  },
	  addStation: function (t, i) {
		t > this._latlngs.length - 2 || t < 1 || (this._stations[t] = i);
	  },
	  onAdd: function (t) {
		L.Marker.prototype.onAdd.call(this, t),
		  !this.options.autostart || this.isStarted()
			? this.isRunning() && this._resumeAnimation()
			: this.start();
	  },
	  onRemove: function (t) {
		L.Marker.prototype.onRemove.call(this, t), this._stopAnimation();
	  },
	  _createDurations: function (t, i) {
		for (var e = t.length - 1, n = [], o = 0, s = 0, r = 0; r < e; r++)
		  (s = t[r + 1].distanceTo(t[r])), n.push(s), (o += s);
		var a = i / o,
		  h = [];
		for (r = 0; r < n.length; r++) h.push(n[r] * a);
		return h;
	  },
	  _startAnimation: function () {
		(this._state = L.Marker.MovingMarker.runState),
		  (this._animId = L.Util.requestAnimFrame(
			function (t) {
			  (this._startTime = Date.now()),
				(this._startTimeStamp = t),
				this._animate(t);
			},
			this,
			!0
		  )),
		  (this._animRequested = !0);
	  },
	  _resumeAnimation: function () {
		this._animRequested ||
		  ((this._animRequested = !0),
		  (this._animId = L.Util.requestAnimFrame(
			function (t) {
			  this._animate(t);
			},
			this,
			!0
		  )));
	  },
	  _stopAnimation: function () {
		this._animRequested &&
		  (L.Util.cancelAnimFrame(this._animId), (this._animRequested = !1));
	  },
	  _updatePosition: function () {
		var t = Date.now() - this._startTime;
		this._animate(this._startTimeStamp + t, !0);
	  },
	  _loadLine: function (t) {
		(this._currentIndex = t),
		  (this._currentDuration = this._durations[t]),
		  (this._currentLine = this._latlngs.slice(t, t + 2));
	  },
	  _updateLine: function (t) {
		var i = t - this._startTimeStamp;
		if (i <= this._currentDuration) return i;
		for (var e, n = this._currentIndex, o = this._currentDuration; i > o; ) {
		  if (((i -= o), void 0 !== (e = this._stations[n + 1]))) {
			if (i < e) return this.setLatLng(this._latlngs[n + 1]), null;
			i -= e;
		  }
		  if (++n >= this._latlngs.length - 1) {
			if (!this.options.loop)
			  return (
				this.setLatLng(this._latlngs[this._latlngs.length - 1]),
				this.stop(i),
				null
			  );
			(n = 0),
			  this.fire("loop", {
				elapsedTime: i
			  });
		  }
		  o = this._durations[n];
		}
		return (
		  this._loadLine(n),
		  (this._startTimeStamp = t - i),
		  (this._startTime = Date.now() - i),
		  i
		);
	  },
	  _animate: function (t, i) {
		this._animRequested = !1;
		var e = this._updateLine(t);
		if (!this.isEnded()) {
		  if (null != e) {
			var n = L.interpolatePosition(
			  this._currentLine[0],
			  this._currentLine[1],
			  this._currentDuration,
			  e
			);
			this.setLatLng(n);
		  }
		  i ||
			((this._animId = L.Util.requestAnimFrame(this._animate, this, !1)),
			(this._animRequested = !0));
		}
	  }
	})),
	  (L.Marker.movingMarker = function (t, i, e) {
		return new L.Marker.MovingMarker(t, i, e);
	  });

	h.length > 1 &&
	  ((s = L.Marker.movingMarker(u, 8e3 * 2, {
		autostart: !0,
		loop: !0,
		icon: n
	  }).addTo(mymap)),
	  mymap.on("zoomstart", function () {
		s.pause();
	  }),
	  mymap.on("zoomend", function () {
		s.resume();
	  }));
	mymap.on('load', function () {
		mymap.resize();
	});
	};
<?php echo '</script'; ?>
>
<?php }
}
