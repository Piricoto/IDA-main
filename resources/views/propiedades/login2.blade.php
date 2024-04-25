<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Log in</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
<script nonce="b4bc1ee1-8bed-4b89-bb4b-54d4176777f9">try{(function(w,d){!function(dr,ds,dt,du){dr[dt]=dr[dt]||{};dr[dt].executed=[];dr.zaraz={deferred:[],listeners:[]};dr.zaraz.q=[];dr.zaraz._f=function(dv){return async function(){var dw=Array.prototype.slice.call(arguments);dr.zaraz.q.push({m:dv,a:dw})}};for(const dx of["track","set","debug"])dr.zaraz[dx]=dr.zaraz._f(dx);dr.zaraz.init=()=>{var dy=ds.getElementsByTagName(du)[0],dz=ds.createElement(du),dA=ds.getElementsByTagName("title")[0];dA&&(dr[dt].t=ds.getElementsByTagName("title")[0].text);dr[dt].x=Math.random();dr[dt].w=dr.screen.width;dr[dt].h=dr.screen.height;dr[dt].j=dr.innerHeight;dr[dt].e=dr.innerWidth;dr[dt].l=dr.location.href;dr[dt].r=ds.referrer;dr[dt].k=dr.screen.colorDepth;dr[dt].n=ds.characterSet;dr[dt].o=(new Date).getTimezoneOffset();if(dr.dataLayer)for(const dE of Object.entries(Object.entries(dataLayer).reduce(((dF,dG)=>({...dF[1],...dG[1]})),{})))zaraz.set(dE[0],dE[1],{scope:"page"});dr[dt].q=[];for(;dr.zaraz.q.length;){const dH=dr.zaraz.q.shift();dr[dt].q.push(dH)}dz.defer=!0;for(const dI of[localStorage,sessionStorage])Object.keys(dI||{}).filter((dK=>dK.startsWith("_zaraz_"))).forEach((dJ=>{try{dr[dt]["z_"+dJ.slice(7)]=JSON.parse(dI.getItem(dJ))}catch{dr[dt]["z_"+dJ.slice(7)]=dI.getItem(dJ)}}));dz.referrerPolicy="origin";dz.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(dr[dt])));dy.parentNode.insertBefore(dz,dy)};["complete","interactive"].includes(ds.readyState)?zaraz.init():dr.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
<a href="../../index2.html"><b>Inmobiliaria BEADE</b></a>
</div>

<div class="card">
<div class="card-body login-card-body">
<p class="login-box-msg">Inicio de sesión</p>
<form action="../../index3.html" method="post">
<div class="input-group mb-3">
<input type="email" class="form-control" placeholder="Email">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="password" class="form-control" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-8">
<div class="icheck-primary">
<!-- <input type="checkbox" id="remember">
<label for="remember">
Remember Me -->
</label>
</div>
</div>

<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">Sign In</button>
</div>

</div>
</form>
<!-- <div class="social-auth-links text-center mb-3">
<p>- OR -</p>
<a href="#" class="btn btn-block btn-primary">
<i class="fab fa-facebook mr-2"></i> Sign in using Facebook
</a>
<a href="#" class="btn btn-block btn-danger">
<i class="fab fa-google-plus mr-2"></i> Sign in using Google+
</a>
</div>-->

<p class="mb-1">
<a href="forgot-password.html">I forgot my password</a>
</p>
<p class="mb-0">
<a href="register.html" class="text-center">Register a new membership</a>
</p>
</div> 

</div>
</div>


<script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>