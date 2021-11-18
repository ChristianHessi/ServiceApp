<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>SOCLE APPLICATIF Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: January 28 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://172.16.30.46/laravel-base/public";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.4.2.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://172.16.30.46/laravel-base/public</code></pre><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>Admin</h1>
<h2>Page for adding a notification template</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>This page is used to fill in the elements necessary to create a template of notification</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/add_email_template" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/add_email_template"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETadd_email_template" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadd_email_template"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadd_email_template"></code></pre>
</div>
<div id="execution-error-GETadd_email_template" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadd_email_template"></code></pre>
</div>
<form id="form-GETadd_email_template" data-method="GET" data-path="add_email_template" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadd_email_template', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadd_email_template" onclick="tryItOut('GETadd_email_template');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadd_email_template" onclick="cancelTryOut('GETadd_email_template');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadd_email_template" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>add_email_template</code></b>
</p>
<p>
<label id="auth-GETadd_email_template" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadd_email_template" data-component="header"></label>
</p>
</form>
<h2>Notification template details page</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>This page displays all the data of a notification template</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/view_email_template" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":2}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/view_email_template"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 2
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETview_email_template" hidden>
    <blockquote>Received response<span id="execution-response-status-GETview_email_template"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETview_email_template"></code></pre>
</div>
<div id="execution-error-GETview_email_template" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETview_email_template"></code></pre>
</div>
<form id="form-GETview_email_template" data-method="GET" data-path="view_email_template" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETview_email_template', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETview_email_template" onclick="tryItOut('GETview_email_template');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETview_email_template" onclick="cancelTryOut('GETview_email_template');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETview_email_template" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>view_email_template</code></b>
</p>
<p>
<label id="auth-GETview_email_template" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETview_email_template" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETview_email_template" data-component="body" required  hidden>
<br>
The id of the notification template</p>

</form>
<h2>Function for adding a notification template</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Request for the creation of a notification template</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/register_email_template" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"doloremque","language":"ullam","object":"rerum","description":"ea","link_name":"doloribus","signature":"numquam"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/register_email_template"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "doloremque",
    "language": "ullam",
    "object": "rerum",
    "description": "ea",
    "link_name": "doloribus",
    "signature": "numquam"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTregister_email_template" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTregister_email_template"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTregister_email_template"></code></pre>
</div>
<div id="execution-error-POSTregister_email_template" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTregister_email_template"></code></pre>
</div>
<form id="form-POSTregister_email_template" data-method="POST" data-path="register_email_template" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTregister_email_template', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTregister_email_template" onclick="tryItOut('POSTregister_email_template');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTregister_email_template" onclick="cancelTryOut('POSTregister_email_template');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTregister_email_template" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>register_email_template</code></b>
</p>
<p>
<label id="auth-POSTregister_email_template" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTregister_email_template" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTregister_email_template" data-component="body" required  hidden>
<br>
The name of notification template</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="language" data-endpoint="POSTregister_email_template" data-component="body" required  hidden>
<br>
The language  of notification template</p>
<p>
<b><code>object</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="object" data-endpoint="POSTregister_email_template" data-component="body" required  hidden>
<br>
The  object of notification template</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTregister_email_template" data-component="body" required  hidden>
<br>
The description of notification template</p>
<p>
<b><code>link_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="link_name" data-endpoint="POSTregister_email_template" data-component="body" required  hidden>
<br>
The link name of the notification template</p>
<p>
<b><code>signature</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="signature" data-endpoint="POSTregister_email_template" data-component="body" required  hidden>
<br>
The signature of the notification template</p>

</form>
<h2>Notification template modification page</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>This page is the interface for modifying a template of notification</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/modify_email_template" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":16}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/modify_email_template"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 16
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETmodify_email_template" hidden>
    <blockquote>Received response<span id="execution-response-status-GETmodify_email_template"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETmodify_email_template"></code></pre>
</div>
<div id="execution-error-GETmodify_email_template" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETmodify_email_template"></code></pre>
</div>
<form id="form-GETmodify_email_template" data-method="GET" data-path="modify_email_template" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETmodify_email_template', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETmodify_email_template" onclick="tryItOut('GETmodify_email_template');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETmodify_email_template" onclick="cancelTryOut('GETmodify_email_template');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETmodify_email_template" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>modify_email_template</code></b>
</p>
<p>
<label id="auth-GETmodify_email_template" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETmodify_email_template" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETmodify_email_template" data-component="body" required  hidden>
<br>
The id of notification template</p>

</form>
<h2>Function for modifying a notification template</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>This function is used to modify a template of notification</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/change_email_template" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"error","language":"omnis","object":"cum","description":"alias","link_name":"qui","signature":"quae"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/change_email_template"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "error",
    "language": "omnis",
    "object": "cum",
    "description": "alias",
    "link_name": "qui",
    "signature": "quae"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTchange_email_template" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTchange_email_template"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTchange_email_template"></code></pre>
</div>
<div id="execution-error-POSTchange_email_template" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTchange_email_template"></code></pre>
</div>
<form id="form-POSTchange_email_template" data-method="POST" data-path="change_email_template" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTchange_email_template', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTchange_email_template" onclick="tryItOut('POSTchange_email_template');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTchange_email_template" onclick="cancelTryOut('POSTchange_email_template');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTchange_email_template" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>change_email_template</code></b>
</p>
<p>
<label id="auth-POSTchange_email_template" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTchange_email_template" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTchange_email_template" data-component="body" required  hidden>
<br>
The name of notification template</p>
<p>
<b><code>language</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="language" data-endpoint="POSTchange_email_template" data-component="body" required  hidden>
<br>
The language  of notification template</p>
<p>
<b><code>object</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="object" data-endpoint="POSTchange_email_template" data-component="body" required  hidden>
<br>
The  object of notification template</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTchange_email_template" data-component="body" required  hidden>
<br>
The description of notification template</p>
<p>
<b><code>link_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="link_name" data-endpoint="POSTchange_email_template" data-component="body" required  hidden>
<br>
The link name of the notification template</p>
<p>
<b><code>signature</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="signature" data-endpoint="POSTchange_email_template" data-component="body" required  hidden>
<br>
The signature of the notification template</p>

</form>
<h2>Notification template list page</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>This page lists all template of notifications</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_email_template" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/all_email_template"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETall_email_template" hidden>
    <blockquote>Received response<span id="execution-response-status-GETall_email_template"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETall_email_template"></code></pre>
</div>
<div id="execution-error-GETall_email_template" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETall_email_template"></code></pre>
</div>
<form id="form-GETall_email_template" data-method="GET" data-path="all_email_template" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETall_email_template', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETall_email_template" onclick="tryItOut('GETall_email_template');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETall_email_template" onclick="cancelTryOut('GETall_email_template');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETall_email_template" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>all_email_template</code></b>
</p>
<p>
<label id="auth-GETall_email_template" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETall_email_template" data-component="header"></label>
</p>
</form>
<h2>List of notification templates following a search</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>This function allows you to search for notification templates based on a name entered by a user</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_email_template_search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"placeat"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/all_email_template_search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "placeat"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETall_email_template_search" hidden>
    <blockquote>Received response<span id="execution-response-status-GETall_email_template_search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETall_email_template_search"></code></pre>
</div>
<div id="execution-error-GETall_email_template_search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETall_email_template_search"></code></pre>
</div>
<form id="form-GETall_email_template_search" data-method="GET" data-path="all_email_template_search" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETall_email_template_search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETall_email_template_search" onclick="tryItOut('GETall_email_template_search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETall_email_template_search" onclick="cancelTryOut('GETall_email_template_search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETall_email_template_search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>all_email_template_search</code></b>
</p>
<p>
<label id="auth-GETall_email_template_search" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETall_email_template_search" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="GETall_email_template_search" data-component="body" required  hidden>
<br>
The object of the notification template</p>

</form>
<h2>List of notification templates following a sort (ascending / descending)</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>This function sorts the notification templates according to the subject and type of notification</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/sort_email_template" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"cum","categorie":"est"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/sort_email_template"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "cum",
    "categorie": "est"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETsort_email_template" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsort_email_template"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsort_email_template"></code></pre>
</div>
<div id="execution-error-GETsort_email_template" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsort_email_template"></code></pre>
</div>
<form id="form-GETsort_email_template" data-method="GET" data-path="sort_email_template" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsort_email_template', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsort_email_template" onclick="tryItOut('GETsort_email_template');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsort_email_template" onclick="cancelTryOut('GETsort_email_template');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsort_email_template" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>sort_email_template</code></b>
</p>
<p>
<label id="auth-GETsort_email_template" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETsort_email_template" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="GETsort_email_template" data-component="body" required  hidden>
<br>
The Search order (ascending / descending)</p>
<p>
<b><code>categorie</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="categorie" data-endpoint="GETsort_email_template" data-component="body" required  hidden>
<br>
The search index (object / type of notification)</p>

</form>
<h2>Page for adding a notification type</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>This page is used to fill in the elements necessary to create a type of notification</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/add_email_type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/add_email_type"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETadd_email_type" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadd_email_type"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadd_email_type"></code></pre>
</div>
<div id="execution-error-GETadd_email_type" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadd_email_type"></code></pre>
</div>
<form id="form-GETadd_email_type" data-method="GET" data-path="add_email_type" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadd_email_type', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadd_email_type" onclick="tryItOut('GETadd_email_type');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadd_email_type" onclick="cancelTryOut('GETadd_email_type');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadd_email_type" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>add_email_type</code></b>
</p>
<p>
<label id="auth-GETadd_email_type" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadd_email_type" data-component="header"></label>
</p>
</form>
<h2>Function for adding a notification type</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Request for the creation of a notification type</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/register_email_type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"sint"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/register_email_type"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "sint"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTregister_email_type" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTregister_email_type"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTregister_email_type"></code></pre>
</div>
<div id="execution-error-POSTregister_email_type" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTregister_email_type"></code></pre>
</div>
<form id="form-POSTregister_email_type" data-method="POST" data-path="register_email_type" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTregister_email_type', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTregister_email_type" onclick="tryItOut('POSTregister_email_type');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTregister_email_type" onclick="cancelTryOut('POSTregister_email_type');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTregister_email_type" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>register_email_type</code></b>
</p>
<p>
<label id="auth-POSTregister_email_type" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTregister_email_type" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTregister_email_type" data-component="body" required  hidden>
<br>
The name of notification type</p>

</form>
<h2>Notification types list page</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>This page lists all types of notifications</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_email_type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/all_email_type"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETall_email_type" hidden>
    <blockquote>Received response<span id="execution-response-status-GETall_email_type"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETall_email_type"></code></pre>
</div>
<div id="execution-error-GETall_email_type" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETall_email_type"></code></pre>
</div>
<form id="form-GETall_email_type" data-method="GET" data-path="all_email_type" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETall_email_type', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETall_email_type" onclick="tryItOut('GETall_email_type');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETall_email_type" onclick="cancelTryOut('GETall_email_type');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETall_email_type" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>all_email_type</code></b>
</p>
<p>
<label id="auth-GETall_email_type" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETall_email_type" data-component="header"></label>
</p>
</form>
<h2>Notification type modification page</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>This page is the interface for modifying a type of notification</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/modify_email_type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":16}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/modify_email_type"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 16
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETmodify_email_type" hidden>
    <blockquote>Received response<span id="execution-response-status-GETmodify_email_type"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETmodify_email_type"></code></pre>
</div>
<div id="execution-error-GETmodify_email_type" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETmodify_email_type"></code></pre>
</div>
<form id="form-GETmodify_email_type" data-method="GET" data-path="modify_email_type" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETmodify_email_type', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETmodify_email_type" onclick="tryItOut('GETmodify_email_type');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETmodify_email_type" onclick="cancelTryOut('GETmodify_email_type');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETmodify_email_type" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>modify_email_type</code></b>
</p>
<p>
<label id="auth-GETmodify_email_type" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETmodify_email_type" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETmodify_email_type" data-component="body" required  hidden>
<br>
The id of the notification type to modify</p>

</form>
<h2>Function for modifying a notification type</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>This function is used to modify a type of notification</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/change_email_type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":14,"name":"quasi"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/change_email_type"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 14,
    "name": "quasi"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTchange_email_type" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTchange_email_type"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTchange_email_type"></code></pre>
</div>
<div id="execution-error-POSTchange_email_type" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTchange_email_type"></code></pre>
</div>
<form id="form-POSTchange_email_type" data-method="POST" data-path="change_email_type" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTchange_email_type', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTchange_email_type" onclick="tryItOut('POSTchange_email_type');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTchange_email_type" onclick="cancelTryOut('POSTchange_email_type');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTchange_email_type" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>change_email_type</code></b>
</p>
<p>
<label id="auth-POSTchange_email_type" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTchange_email_type" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTchange_email_type" data-component="body" required  hidden>
<br>
The id of the notification type to modify</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTchange_email_type" data-component="body" required  hidden>
<br>
The new name of the notification type</p>

</form>
<h2>Function to delete a notification type</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>This function allows you to delete a notification type only if it is not assigned to a notification template.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/delete_email_type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":13}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/delete_email_type"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 13
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETdelete_email_type" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdelete_email_type"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdelete_email_type"></code></pre>
</div>
<div id="execution-error-GETdelete_email_type" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdelete_email_type"></code></pre>
</div>
<form id="form-GETdelete_email_type" data-method="GET" data-path="delete_email_type" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdelete_email_type', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdelete_email_type" onclick="tryItOut('GETdelete_email_type');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdelete_email_type" onclick="cancelTryOut('GETdelete_email_type');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdelete_email_type" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>delete_email_type</code></b>
</p>
<p>
<label id="auth-GETdelete_email_type" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETdelete_email_type" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETdelete_email_type" data-component="body" required  hidden>
<br>
The id of the notification type to delete</p>

</form>
<h2>Add a role page</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Add a role page</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/add_role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/add_role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETadd_role" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadd_role"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadd_role"></code></pre>
</div>
<div id="execution-error-GETadd_role" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadd_role"></code></pre>
</div>
<form id="form-GETadd_role" data-method="GET" data-path="add_role" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadd_role', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadd_role" onclick="tryItOut('GETadd_role');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadd_role" onclick="cancelTryOut('GETadd_role');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadd_role" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>add_role</code></b>
</p>
<p>
<label id="auth-GETadd_role" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadd_role" data-component="header"></label>
</p>
</form>
<h2>Role update page</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Role update page</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/modify_role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":12}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/modify_role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 12
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETmodify_role" hidden>
    <blockquote>Received response<span id="execution-response-status-GETmodify_role"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETmodify_role"></code></pre>
</div>
<div id="execution-error-GETmodify_role" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETmodify_role"></code></pre>
</div>
<form id="form-GETmodify_role" data-method="GET" data-path="modify_role" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETmodify_role', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETmodify_role" onclick="tryItOut('GETmodify_role');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETmodify_role" onclick="cancelTryOut('GETmodify_role');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETmodify_role" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>modify_role</code></b>
</p>
<p>
<label id="auth-GETmodify_role" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETmodify_role" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETmodify_role" data-component="body" required  hidden>
<br>
The id of role</p>

</form>
<h2>Delete a role</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Function to delete a role only if the role is not assigned to a user</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/delete_role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":10}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/delete_role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 10
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETdelete_role" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdelete_role"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdelete_role"></code></pre>
</div>
<div id="execution-error-GETdelete_role" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdelete_role"></code></pre>
</div>
<form id="form-GETdelete_role" data-method="GET" data-path="delete_role" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdelete_role', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdelete_role" onclick="tryItOut('GETdelete_role');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdelete_role" onclick="cancelTryOut('GETdelete_role');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdelete_role" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>delete_role</code></b>
</p>
<p>
<label id="auth-GETdelete_role" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETdelete_role" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETdelete_role" data-component="body" required  hidden>
<br>
The id of role</p>

</form>
<h2>Register a role</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Function that registers a role and its permissions</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/register_role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"suscipit","permissions":[]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/register_role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "suscipit",
    "permissions": []
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTregister_role" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTregister_role"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTregister_role"></code></pre>
</div>
<div id="execution-error-POSTregister_role" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTregister_role"></code></pre>
</div>
<form id="form-POSTregister_role" data-method="POST" data-path="register_role" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTregister_role', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTregister_role" onclick="tryItOut('POSTregister_role');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTregister_role" onclick="cancelTryOut('POSTregister_role');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTregister_role" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>register_role</code></b>
</p>
<p>
<label id="auth-POSTregister_role" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTregister_role" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTregister_role" data-component="body" required  hidden>
<br>
The name of role</p>
<p>
<b><code>permissions</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<input type="text" name="permissions" data-endpoint="POSTregister_role" data-component="body" required  hidden>
<br>
The permissions of role</p>

</form>
<h2>Update a role</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Function that modifies the permissions assigned to a role</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/register_role_change" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":15,"name":"pariatur","permissions":[]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/register_role_change"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 15,
    "name": "pariatur",
    "permissions": []
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTregister_role_change" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTregister_role_change"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTregister_role_change"></code></pre>
</div>
<div id="execution-error-POSTregister_role_change" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTregister_role_change"></code></pre>
</div>
<form id="form-POSTregister_role_change" data-method="POST" data-path="register_role_change" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTregister_role_change', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTregister_role_change" onclick="tryItOut('POSTregister_role_change');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTregister_role_change" onclick="cancelTryOut('POSTregister_role_change');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTregister_role_change" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>register_role_change</code></b>
</p>
<p>
<label id="auth-POSTregister_role_change" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTregister_role_change" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTregister_role_change" data-component="body" required  hidden>
<br>
The id of role</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTregister_role_change" data-component="body" required  hidden>
<br>
The name of role</p>
<p>
<b><code>permissions</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<input type="text" name="permissions" data-endpoint="POSTregister_role_change" data-component="body" required  hidden>
<br>
The permissions of role</p>

</form>
<h2>List of roles</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>List of roles</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/all_role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETall_role" hidden>
    <blockquote>Received response<span id="execution-response-status-GETall_role"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETall_role"></code></pre>
</div>
<div id="execution-error-GETall_role" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETall_role"></code></pre>
</div>
<form id="form-GETall_role" data-method="GET" data-path="all_role" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETall_role', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETall_role" onclick="tryItOut('GETall_role');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETall_role" onclick="cancelTryOut('GETall_role');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETall_role" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>all_role</code></b>
</p>
<p>
<label id="auth-GETall_role" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETall_role" data-component="header"></label>
</p>
</form>
<h2>Add user Page</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Add user Page</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/add_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/add_user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETadd_user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadd_user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadd_user"></code></pre>
</div>
<div id="execution-error-GETadd_user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadd_user"></code></pre>
</div>
<form id="form-GETadd_user" data-method="GET" data-path="add_user" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadd_user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadd_user" onclick="tryItOut('GETadd_user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadd_user" onclick="cancelTryOut('GETadd_user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadd_user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>add_user</code></b>
</p>
<p>
<label id="auth-GETadd_user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadd_user" data-component="header"></label>
</p>
</form>
<h2>View user page</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>View page for all of a user's data</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/view_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":9}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/view_user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 9
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETview_user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETview_user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETview_user"></code></pre>
</div>
<div id="execution-error-GETview_user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETview_user"></code></pre>
</div>
<form id="form-GETview_user" data-method="GET" data-path="view_user" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETview_user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETview_user" onclick="tryItOut('GETview_user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETview_user" onclick="cancelTryOut('GETview_user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETview_user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>view_user</code></b>
</p>
<p>
<label id="auth-GETview_user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETview_user" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETview_user" data-component="body" required  hidden>
<br>
The id of user</p>

</form>
<h2>User edit page</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>User edit page</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/modify_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":4}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/modify_user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 4
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETmodify_user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETmodify_user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETmodify_user"></code></pre>
</div>
<div id="execution-error-GETmodify_user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETmodify_user"></code></pre>
</div>
<form id="form-GETmodify_user" data-method="GET" data-path="modify_user" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETmodify_user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETmodify_user" onclick="tryItOut('GETmodify_user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETmodify_user" onclick="cancelTryOut('GETmodify_user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETmodify_user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>modify_user</code></b>
</p>
<p>
<label id="auth-GETmodify_user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETmodify_user" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETmodify_user" data-component="body" required  hidden>
<br>
The id of user</p>

</form>
<h2>User Password Change Page</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>user password modification page</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/modify_user_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":7}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/modify_user_password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 7
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETmodify_user_password" hidden>
    <blockquote>Received response<span id="execution-response-status-GETmodify_user_password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETmodify_user_password"></code></pre>
</div>
<div id="execution-error-GETmodify_user_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETmodify_user_password"></code></pre>
</div>
<form id="form-GETmodify_user_password" data-method="GET" data-path="modify_user_password" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETmodify_user_password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETmodify_user_password" onclick="tryItOut('GETmodify_user_password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETmodify_user_password" onclick="cancelTryOut('GETmodify_user_password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETmodify_user_password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>modify_user_password</code></b>
</p>
<p>
<label id="auth-GETmodify_user_password" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETmodify_user_password" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETmodify_user_password" data-component="body" required  hidden>
<br>
The id of user</p>

</form>
<h2>Change user password</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Function that changes the role of a user</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/change_user_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":3,"password":"praesentium","confirm_password":"veritatis"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/change_user_password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 3,
    "password": "praesentium",
    "confirm_password": "veritatis"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTchange_user_password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTchange_user_password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTchange_user_password"></code></pre>
</div>
<div id="execution-error-POSTchange_user_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTchange_user_password"></code></pre>
</div>
<form id="form-POSTchange_user_password" data-method="POST" data-path="change_user_password" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTchange_user_password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTchange_user_password" onclick="tryItOut('POSTchange_user_password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTchange_user_password" onclick="cancelTryOut('POSTchange_user_password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTchange_user_password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>change_user_password</code></b>
</p>
<p>
<label id="auth-POSTchange_user_password" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTchange_user_password" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTchange_user_password" data-component="body" required  hidden>
<br>
The id of user</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTchange_user_password" data-component="body" required  hidden>
<br>
The new password of user</p>
<p>
<b><code>confirm_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="confirm_password" data-endpoint="POSTchange_user_password" data-component="body" required  hidden>
<br>
The confirm password of user</p>

</form>
<h2>Change role user</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Function that modifies the role of a user (by an admin)</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/change_user_role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id_role":8,"id":3}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/change_user_role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id_role": 8,
    "id": 3
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTchange_user_role" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTchange_user_role"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTchange_user_role"></code></pre>
</div>
<div id="execution-error-POSTchange_user_role" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTchange_user_role"></code></pre>
</div>
<form id="form-POSTchange_user_role" data-method="POST" data-path="change_user_role" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTchange_user_role', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTchange_user_role" onclick="tryItOut('POSTchange_user_role');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTchange_user_role" onclick="cancelTryOut('POSTchange_user_role');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTchange_user_role" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>change_user_role</code></b>
</p>
<p>
<label id="auth-POSTchange_user_role" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTchange_user_role" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id_role</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id_role" data-endpoint="POSTchange_user_role" data-component="body" required  hidden>
<br>
The id of role</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTchange_user_role" data-component="body" required  hidden>
<br>
The id of user</p>

</form>
<h2>Add user</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Function which creates a user (by an admin)</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/registration_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"error","surname":"ad","sex":"quia","birthday":"voluptatem","Phone_number":18,"password":"sunt","confirm_password":"natus","email":"et"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/registration_user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "error",
    "surname": "ad",
    "sex": "quia",
    "birthday": "voluptatem",
    "Phone_number": 18,
    "password": "sunt",
    "confirm_password": "natus",
    "email": "et"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTregistration_user" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTregistration_user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTregistration_user"></code></pre>
</div>
<div id="execution-error-POSTregistration_user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTregistration_user"></code></pre>
</div>
<form id="form-POSTregistration_user" data-method="POST" data-path="registration_user" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTregistration_user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTregistration_user" onclick="tryItOut('POSTregistration_user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTregistration_user" onclick="cancelTryOut('POSTregistration_user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTregistration_user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>registration_user</code></b>
</p>
<p>
<label id="auth-POSTregistration_user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTregistration_user" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTregistration_user" data-component="body" required  hidden>
<br>
The name of user</p>
<p>
<b><code>surname</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="surname" data-endpoint="POSTregistration_user" data-component="body" required  hidden>
<br>
The surname of user</p>
<p>
<b><code>sex</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="sex" data-endpoint="POSTregistration_user" data-component="body" required  hidden>
<br>
The sex of user</p>
<p>
<b><code>birthday</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="birthday" data-endpoint="POSTregistration_user" data-component="body" required  hidden>
<br>
The birthday of user</p>
<p>
<b><code>Phone_number</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="Phone_number" data-endpoint="POSTregistration_user" data-component="body" required  hidden>
<br>
The phone number of user</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTregistration_user" data-component="body" required  hidden>
<br>
The password of user</p>
<p>
<b><code>confirm_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="confirm_password" data-endpoint="POSTregistration_user" data-component="body" required  hidden>
<br>
The confirm password of user</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTregistration_user" data-component="body" required  hidden>
<br>
The email of user</p>

</form>
<h2>Users list page</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>This page lists all users</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/all_users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETall_users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETall_users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETall_users"></code></pre>
</div>
<div id="execution-error-GETall_users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETall_users"></code></pre>
</div>
<form id="form-GETall_users" data-method="GET" data-path="all_users" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETall_users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETall_users" onclick="tryItOut('GETall_users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETall_users" onclick="cancelTryOut('GETall_users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETall_users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>all_users</code></b>
</p>
<p>
<label id="auth-GETall_users" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETall_users" data-component="header"></label>
</p>
</form>
<h2>Active user</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Function to activate a user</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/active_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":10}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/active_user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 10
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETactive_user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETactive_user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETactive_user"></code></pre>
</div>
<div id="execution-error-GETactive_user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETactive_user"></code></pre>
</div>
<form id="form-GETactive_user" data-method="GET" data-path="active_user" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETactive_user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETactive_user" onclick="tryItOut('GETactive_user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETactive_user" onclick="cancelTryOut('GETactive_user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETactive_user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>active_user</code></b>
</p>
<p>
<label id="auth-GETactive_user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETactive_user" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETactive_user" data-component="body" required  hidden>
<br>
The id of user</p>

</form>
<h2>Deactive user</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Function to deactivate a user</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/deactive_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":13}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/deactive_user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 13
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETdeactive_user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdeactive_user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdeactive_user"></code></pre>
</div>
<div id="execution-error-GETdeactive_user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdeactive_user"></code></pre>
</div>
<form id="form-GETdeactive_user" data-method="GET" data-path="deactive_user" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdeactive_user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdeactive_user" onclick="tryItOut('GETdeactive_user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdeactive_user" onclick="cancelTryOut('GETdeactive_user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdeactive_user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>deactive_user</code></b>
</p>
<p>
<label id="auth-GETdeactive_user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETdeactive_user" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETdeactive_user" data-component="body" required  hidden>
<br>
The id of user</p>

</form>
<h2>Change language</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Function to change the language of a user</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/change_language" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"lang":"dolores"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/change_language"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "lang": "dolores"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETchange_language" hidden>
    <blockquote>Received response<span id="execution-response-status-GETchange_language"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETchange_language"></code></pre>
</div>
<div id="execution-error-GETchange_language" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETchange_language"></code></pre>
</div>
<form id="form-GETchange_language" data-method="GET" data-path="change_language" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETchange_language', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETchange_language" onclick="tryItOut('GETchange_language');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETchange_language" onclick="cancelTryOut('GETchange_language');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETchange_language" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>change_language</code></b>
</p>
<p>
<label id="auth-GETchange_language" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETchange_language" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>lang</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lang" data-endpoint="GETchange_language" data-component="body" required  hidden>
<br>
The language of user</p>

</form>
<h2>Dashboard</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Last 30 Days registrations dashboard page</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/dashboard"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETdashboard" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdashboard"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard"></code></pre>
</div>
<div id="execution-error-GETdashboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard"></code></pre>
</div>
<form id="form-GETdashboard" data-method="GET" data-path="dashboard" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdashboard', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdashboard" onclick="tryItOut('GETdashboard');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdashboard" onclick="cancelTryOut('GETdashboard');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdashboard" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>dashboard</code></b>
</p>
<p>
<label id="auth-GETdashboard" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETdashboard" data-component="header"></label>
</p>
</form>
<h2>List of users following a search</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>List of all users following a search</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_users_search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"qui"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/all_users_search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "qui"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETall_users_search" hidden>
    <blockquote>Received response<span id="execution-response-status-GETall_users_search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETall_users_search"></code></pre>
</div>
<div id="execution-error-GETall_users_search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETall_users_search"></code></pre>
</div>
<form id="form-GETall_users_search" data-method="GET" data-path="all_users_search" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETall_users_search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETall_users_search" onclick="tryItOut('GETall_users_search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETall_users_search" onclick="cancelTryOut('GETall_users_search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETall_users_search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>all_users_search</code></b>
</p>
<p>
<label id="auth-GETall_users_search" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETall_users_search" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="GETall_users_search" data-component="body" required  hidden>
<br>
The research element</p>

</form>
<h2>Sort users</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>List of all users with sort</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/sort_users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"ratione","categorie":"dolore"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/sort_users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "ratione",
    "categorie": "dolore"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETsort_users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsort_users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsort_users"></code></pre>
</div>
<div id="execution-error-GETsort_users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsort_users"></code></pre>
</div>
<form id="form-GETsort_users" data-method="GET" data-path="sort_users" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsort_users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsort_users" onclick="tryItOut('GETsort_users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsort_users" onclick="cancelTryOut('GETsort_users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsort_users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>sort_users</code></b>
</p>
<p>
<label id="auth-GETsort_users" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETsort_users" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="GETsort_users" data-component="body" required  hidden>
<br>
The Search order (ascending / descending)</p>
<p>
<b><code>categorie</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="categorie" data-endpoint="GETsort_users" data-component="body" required  hidden>
<br>
The search index (role/email/Lastname and firstname)</p>

</form>
<h2>Logging</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Lists of activities from the platform</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_logs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/all_logs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETall_logs" hidden>
    <blockquote>Received response<span id="execution-response-status-GETall_logs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETall_logs"></code></pre>
</div>
<div id="execution-error-GETall_logs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETall_logs"></code></pre>
</div>
<form id="form-GETall_logs" data-method="GET" data-path="all_logs" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETall_logs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETall_logs" onclick="tryItOut('GETall_logs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETall_logs" onclick="cancelTryOut('GETall_logs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETall_logs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>all_logs</code></b>
</p>
<p>
<label id="auth-GETall_logs" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETall_logs" data-component="header"></label>
</p>
</form>
<h2>Logging over a period</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>List of activities on the platform over a given period</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_logs_search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"start_date":"dolor","end_date":"facere"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/all_logs_search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "start_date": "dolor",
    "end_date": "facere"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETall_logs_search" hidden>
    <blockquote>Received response<span id="execution-response-status-GETall_logs_search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETall_logs_search"></code></pre>
</div>
<div id="execution-error-GETall_logs_search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETall_logs_search"></code></pre>
</div>
<form id="form-GETall_logs_search" data-method="GET" data-path="all_logs_search" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETall_logs_search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETall_logs_search" onclick="tryItOut('GETall_logs_search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETall_logs_search" onclick="cancelTryOut('GETall_logs_search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETall_logs_search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>all_logs_search</code></b>
</p>
<p>
<small class="badge badge-black">POST</small>
 <b><code>all_logs_search</code></b>
</p>
<p>
<label id="auth-GETall_logs_search" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETall_logs_search" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="start_date" data-endpoint="GETall_logs_search" data-component="body" required  hidden>
<br>
The start date of search</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="end_date" data-endpoint="GETall_logs_search" data-component="body" required  hidden>
<br>
the end date of search</p>

</form><h1>All Group</h1>
<h2>Redirect  login page</h2>
<p>This link allows the redirection to the login page</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;

&lt;head&gt;
  &lt;meta charset="utf-8"&gt;
  &lt;meta content="width=device-width, initial-scale=1.0" name="viewport"&gt;

  &lt;title&gt;Registration Login&lt;/title&gt;
  &lt;meta content="" name="description"&gt;
  &lt;meta content="" name="keywords"&gt;

  &lt;!-- Favicons --&gt;
  &lt;!--&lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/favicon.png" rel="icon"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/apple-touch-icon.png" rel="apple-touch-icon"&gt;--&gt;
  &lt;!--&lt;link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="icon"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="apple-touch-icon"&gt;--&gt;

  &lt;link rel="icon" type="image/png" href="http://172.16.30.46/laravel-base/public/logo1.png" /&gt;

  &lt;!-- Google Fonts --&gt;
  &lt;link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet"&gt;

  &lt;!-- Vendor CSS Files --&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/icofont/icofont.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/animate.css/animate.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.css" rel="stylesheet"&gt;

  &lt;!-- Template Main CSS File --&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/css/style.css" rel="stylesheet"&gt;

  &lt;script src="http://172.16.30.46/laravel-base/public/tinymce.min.js"&gt; &lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/intelphone/build/js/intlTelInput.js"&gt; &lt;/script&gt;
  &lt;link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/intelphone/build/css/intlTelInput.css"&gt;

  &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"&gt;&lt;/script&gt;
  &lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"&gt;&lt;/script&gt;

  &lt;link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-css-toastr.min.css"&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-js-toastr.min.js"&gt; &lt;/script&gt;

  &lt;script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"&gt;
  &lt;/script&gt;

&lt;script src="https://code.jquery.com/jquery-3.3.1.min.js"&gt;&lt;/script&gt;
&lt;script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"&gt;&lt;/script&gt;
&lt;link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /&gt;

&lt;link href="http://172.16.30.46/laravel-base/public/template-admin/gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"&gt;

    &lt;style&gt;
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    &lt;/style&gt;

    &lt;style&gt;
        body {
            font-family: 'Nunito';
        }
    &lt;/style&gt;

    &lt;link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/css/template_base.css"&gt;

&lt;/head&gt;

&lt;body style="background-color: #F7F7F8;"&gt;

    &lt;div class="login relative flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"&gt;

    &lt;div class="shadow-lg bg-white login p-5"&gt;
        &lt;a class="flex items-center justify-center" style="margin-bottom: 25px;" href="http://172.16.30.46/laravel-base/public/registration_login"&gt;
            &lt;img src="http://172.16.30.46/laravel-base/public/logo1.png" &gt;
        &lt;/a&gt;

        &lt;form action="http://172.16.30.46/laravel-base/public/login_account" method="post" class="form-group" autocomplete="off"&gt;
            &lt;input type="hidden" name="_token" value="JZca2AvcgXGLAm2WwIsBwBvR5HHGciX1ZysB3xBB"&gt;            &lt;div class="row"&gt;
                &lt;div class="col-12"&gt;
                    &lt;label for="email"&gt; Email*&lt;/label&gt;
                &lt;input type="email" name="email" id="email" value="" required class="form-control input-lg"&gt; &lt;br&gt;
                &lt;/div&gt;

            &lt;/div&gt;

            &lt;div class="row"&gt;
                &lt;div class="col-12"&gt;
                    &lt;label for="password"&gt; Mot de passe*&lt;/label&gt;
                    &lt;input type="password" name="password" id="password" required class="form-control input-lg"&gt; &lt;br&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;input type="submit" id="submit"  value="Me connecter" class="btn btn-info btn-block submitlink" /&gt;

            &lt;div class="text-right"&gt;
                &lt;a class="forgot_link" href="http://172.16.30.46/laravel-base/public/forgot_password"&gt; Mot de passe oublié&lt;/a&gt; &lt;br&gt;
            &lt;/div&gt;

        &lt;/form&gt;
        &lt;p  class="text-center"&gt; je n'ai pas de Compte ,
            &lt;a href="http://172.16.30.46/laravel-base/public/registration_page" class="text-primary urllink" &gt;
                je m'inscris            &lt;/a&gt;
        &lt;/p&gt;
    &lt;/div&gt;

    &lt;script&gt;
        function validate_form(){
            pwd1 = $("#password").val();
            //pwd2 = $("#password2").val();
            var format = /[ `!@#$%^&amp;*()_+\-=\[\]{};':"\\|,.&lt;&gt;\/?~]/;
            //if(pwd1 == pwd2){
                if(pwd1.length &gt;=8 &amp;&amp; pwd1.length &lt;= 16){
                    //if(pwd1.match(/[A-Z]/) &amp;&amp; pwd1.match(/[0-9]/) &amp;&amp; format.test(pwd1)){
                    if(pwd1.match(/[A-Z]/) &amp;&amp; pwd1.match(/[0-9]/)){
                        //toastr.success("form correct");
                        return true;
                    }
                    else{
                        toastr.warning('Un mot de passe contient au moins une majuscule et un chiffre');
                        return false;
                    }
                }
                else if(pwd1.length &gt; 16){
                    toastr.warning('La taille maximale d&amp;#039;un mot de passe est de 16 caractéres');
                    return false;

                }
                else{
                    toastr.warning('La taille minimale d&amp;#039;un mot de passe est de 8 caractéres');
                    return false;
                }
            return false;
        }
    &lt;/script&gt;

    &lt;div&gt;

  &lt;!-- ======= Footer ======= --&gt;

  &lt;a href="#" class="back-to-top"&gt;&lt;i class="icofont-simple-up"&gt;&lt;/i&gt;&lt;/a&gt;

  &lt;!-- Vendor JS Files --&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery/jquery.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery.easing/jquery.easing.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/php-email-form/validate.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery-sticky/jquery.sticky.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/waypoints/jquery.waypoints.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/counterup/counterup.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/owl.carousel.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/isotope-layout/isotope.pkgd.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.js"&gt;&lt;/script&gt;

  &lt;!-- Template Main JS File --&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/js/main.js"&gt;&lt;/script&gt;

  &lt;/body&gt;

&lt;/html&gt;
</code></pre>
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>
<h2>Registration page</h2>
<p>This page allows a user to create an account</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/registration_page" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/registration_page"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;

&lt;head&gt;
  &lt;meta charset="utf-8"&gt;
  &lt;meta content="width=device-width, initial-scale=1.0" name="viewport"&gt;

  &lt;title&gt;Registration Page&lt;/title&gt;
  &lt;meta content="" name="description"&gt;
  &lt;meta content="" name="keywords"&gt;

  &lt;!-- Favicons --&gt;
  &lt;!--&lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/favicon.png" rel="icon"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/apple-touch-icon.png" rel="apple-touch-icon"&gt;--&gt;
  &lt;!--&lt;link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="icon"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="apple-touch-icon"&gt;--&gt;

  &lt;link rel="icon" type="image/png" href="http://172.16.30.46/laravel-base/public/logo1.png" /&gt;

  &lt;!-- Google Fonts --&gt;
  &lt;link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet"&gt;

  &lt;!-- Vendor CSS Files --&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/icofont/icofont.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/animate.css/animate.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.css" rel="stylesheet"&gt;

  &lt;!-- Template Main CSS File --&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/css/style.css" rel="stylesheet"&gt;

  &lt;script src="http://172.16.30.46/laravel-base/public/tinymce.min.js"&gt; &lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/intelphone/build/js/intlTelInput.js"&gt; &lt;/script&gt;
  &lt;link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/intelphone/build/css/intlTelInput.css"&gt;

  &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"&gt;&lt;/script&gt;
  &lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"&gt;&lt;/script&gt;

  &lt;link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-css-toastr.min.css"&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-js-toastr.min.js"&gt; &lt;/script&gt;

  &lt;script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"&gt;
  &lt;/script&gt;

&lt;script src="https://code.jquery.com/jquery-3.3.1.min.js"&gt;&lt;/script&gt;
&lt;script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"&gt;&lt;/script&gt;
&lt;link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /&gt;

&lt;link href="http://172.16.30.46/laravel-base/public/template-admin/gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"&gt;

    &lt;style&gt;
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    &lt;/style&gt;

    &lt;style&gt;
        body {
            font-family: 'Nunito';
        }
    &lt;/style&gt;

    &lt;link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/css/template_base.css"&gt;

&lt;/head&gt;

&lt;body style="background-color: #F7F7F8;"&gt;

    &lt;div class="login relative flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"&gt;

    &lt;div class="shadow-lg bg-white login"&gt;
        &lt;a class="flex items-center justify-center" style="margin-bottom: 25px;" href="http://172.16.30.46/laravel-base/public/registration_login"&gt;
            &lt;img src="http://172.16.30.46/laravel-base/public/logo1.png" &gt;
        &lt;/a&gt;

        &lt;form action="http://172.16.30.46/laravel-base/public/registration_account" method="post" class="form-group" autocomplete="off"&gt;
            &lt;input type="hidden" name="_token" value="JZca2AvcgXGLAm2WwIsBwBvR5HHGciX1ZysB3xBB"&gt;            &lt;div class="row"&gt;
                &lt;div class="col-6"&gt;
                    &lt;label for="name"&gt; Nom*&lt;/label&gt;
                &lt;input type="text" id="name" value="" required name="name"  class="form-control input-lg"&gt; &lt;br&gt;
                &lt;/div&gt;
                &lt;div class="col-6"&gt;
                    &lt;label for="surname"&gt; Prénom* &lt;/label&gt;
                    &lt;input type="text" value="" name="surname" id="surname" required class="form-control input-lg"&gt; &lt;br&gt;
                &lt;/div&gt;
            &lt;/div&gt;

                &lt;div class="row"&gt;
                &lt;div class="col-6"&gt;
                    &lt;label for="birthday"&gt;Date de naissance* &lt;/label&gt;
                    &lt;!--&lt;input type="date"  max="2021-01-28" name="birthday" value="" id="birthday" class="form-control" required/&gt; &lt;br&gt;--&gt;
                    &lt;input id="birthday" name="birthday" value="" placeholder="dd/mm/yyyy" style="background-color: white;" class="form-control" required readonly /&gt;
                &lt;/div&gt;
                &lt;div class="col-6"&gt;
                    &lt;label for="sexe"&gt; Sexe*&lt;/label&gt;
                                            &lt;select id="sexe" name="sexe" class="form-control input-lg"&gt;
                            &lt;option value="m"&gt; Masculin &lt;/option&gt;
                            &lt;option value="f"&gt; Féminin &lt;/option&gt;
                        &lt;/select&gt; &lt;br&gt;

                &lt;/div&gt;
                &lt;div class="col-12"&gt;
                    &lt;label for="phone_number"&gt; Téléphone*&lt;/label&gt;&lt;br&gt;
                    &lt;input id="phone_number" value="" name="phone_number"  type="tel" required  class="form-control input-lg"&gt; &lt;br&gt;
                &lt;/div&gt;
                &lt;/div&gt;

            &lt;div class="row"&gt;
                &lt;div class="col-12"&gt;
                    &lt;label for="email"&gt; Email*&lt;/label&gt;
                    &lt;input type="email" value="" name="email" id="email" required class="form-control input-lg"&gt; &lt;br&gt;
                &lt;/div&gt;

            &lt;/div&gt;

            &lt;div class="row"&gt;
                &lt;div class="col-6"&gt;
                    &lt;label for="password1"&gt; Mot de passe*&lt;/label&gt;
                    &lt;input type="password" onkeyup="return validate_password()"  id="password1" name="password1" required class="form-control input-lg"&gt;
                    &lt;p&gt;
                        Un mot de passe doit contenir :
                        &lt;ul&gt;
                            &lt;div  id="password-8"&gt;
                                &lt;li&gt; Au moins 8 caractéres &lt;/li&gt;
                            &lt;/div&gt;
                            &lt;div id="password-maj"&gt;
                                &lt;li&gt;Au moins une lettre majuscule &lt;/li&gt;
                            &lt;/div&gt;
                            &lt;div id="password-chif"&gt;
                                &lt;li&gt; Au moins un chiffre&lt;/li&gt;
                            &lt;/div&gt;
                        &lt;/ul&gt;
                    &lt;/p&gt;

                    &lt;br&gt;

                &lt;/div&gt;
                &lt;div class="col-6"&gt;
                    &lt;label for="password2"&gt; Confirmation du mot de passe*&lt;/label&gt;
                    &lt;input type="password" id="password2" name="password2" required class="form-control input-lg"&gt;  &lt;br&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;input type="submit" onclick="return validate_form()" value="M'inscrire" class="btn btn-info btn-block submitlink" /&gt;
        &lt;/form&gt; &lt;br&gt;
        &lt;p  class="text-center"&gt; j'ai déjà un compte,
            &lt;a href="http://172.16.30.46/laravel-base/public/registration_login" class="text-primary urllink" &gt;
                Je me connecte            &lt;/a&gt;
        &lt;/p&gt;
    &lt;/div&gt;

    &lt;script&gt;
        format =  "dd\/mm\/yyyy";
         today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        $('#birthday').datepicker({
            uiLibrary: 'bootstrap4',
            format: format,
            //format: 'mm/dd/yyyy',
            //maxDate: '27/01/2021',
            maxDate: today,
            icons: {
                rightIcon: '&lt;span class="fa fa-calendar"&gt;&lt;/span&gt;'
            }
        });
    &lt;/script&gt;

    &lt;script&gt;
        function validate_password(){
            //alert("hello");
            pwd1 = $("#password1").val();
            var format = /[ `!@#$%^&amp;*()_+\-=\[\]{};':"\\|,.&lt;&gt;\/?~]/;

            $("#password-8").css("background-color","red");
            $("#password-8").css("color","white");

            $("#password-maj").css("background-color","red");
            $("#password-maj").css("color","white");

            $("#password-chif").css("background-color","red");
            $("#password-chif").css("color","white");

            if(pwd1.length &gt;=8 &amp;&amp; pwd1.length &lt;= 16){
                $("#password-8").css("background-color","green");
                $("#password-8").css("color","white");
            }

            if(pwd1.match(/[A-Z]/)){
                $("#password-maj").css("background-color","green");
                $("#password-maj").css("color","white");
            }

            if(pwd1.match(/[0-9]/)){
                $("#password-chif").css("background-color","green");
                $("#password-chif").css("color","white");
            }

        }
    &lt;/script&gt;

    &lt;script&gt;
        function validate_form(){
            pwd1 = $("#password1").val();
            pwd2 = $("#password2").val();
            var format = /[ `!@#$%^&amp;*()_+\-=\[\]{};':"\\|,.&lt;&gt;\/?~]/;
            if(pwd1 == pwd2){
                if(pwd1.length &gt;=8 &amp;&amp; pwd1.length &lt;= 16){
                    //if(pwd1.match(/[A-Z]/) &amp;&amp; pwd1.match(/[0-9]/) &amp;&amp; format.test(pwd1)){
                    if(pwd1.match(/[A-Z]/) &amp;&amp; pwd1.match(/[0-9]/)){
                        //toastr.success("form correct");
                        return true;
                    }
                    else{
                        toastr.warning('Un mot de passe contient au moins une majuscule et un chiffre');
                        return false;
                    }
                }
                else if(pwd1.length &gt; 16){
                    toastr.warning('La taille maximale d&amp;#039;un mot de passe est de 16 caractéres');
                    return false;

                }
                else{
                    toastr.warning('La taille minimale d&amp;#039;un mot de passe est de 8 caractéres');
                    return false;
                }
            }
            else{
                toastr.warning('La confirmation du mot de  passe ne correspond pas au mot de passe');
                return false;
            }
            return false;
        }
    &lt;/script&gt;

    &lt;script&gt;
        var input = document.querySelector("#phone_number");
        input.class = "form-control col-12";
        window.intlTelInput(input, {
            initialCountry: "auto",
            localizedCountries: { 'de': 'Deutschland' },
            nationalMode: false,
            utilsScript: "build/js/utils.js",
        });

    &lt;/script&gt;

    &lt;div&gt;

  &lt;!-- ======= Footer ======= --&gt;

  &lt;a href="#" class="back-to-top"&gt;&lt;i class="icofont-simple-up"&gt;&lt;/i&gt;&lt;/a&gt;

  &lt;!-- Vendor JS Files --&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery/jquery.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery.easing/jquery.easing.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/php-email-form/validate.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery-sticky/jquery.sticky.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/waypoints/jquery.waypoints.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/counterup/counterup.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/owl.carousel.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/isotope-layout/isotope.pkgd.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.js"&gt;&lt;/script&gt;

  &lt;!-- Template Main JS File --&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/js/main.js"&gt;&lt;/script&gt;

  &lt;/body&gt;

&lt;/html&gt;
</code></pre>
<div id="execution-results-GETregistration_page" hidden>
    <blockquote>Received response<span id="execution-response-status-GETregistration_page"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETregistration_page"></code></pre>
</div>
<div id="execution-error-GETregistration_page" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETregistration_page"></code></pre>
</div>
<form id="form-GETregistration_page" data-method="GET" data-path="registration_page" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETregistration_page', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETregistration_page" onclick="tryItOut('GETregistration_page');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETregistration_page" onclick="cancelTryOut('GETregistration_page');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETregistration_page" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>registration_page</code></b>
</p>
</form>
<h2>Login page</h2>
<p>This page allows the user to login</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/registration_login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/registration_login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;

&lt;head&gt;
  &lt;meta charset="utf-8"&gt;
  &lt;meta content="width=device-width, initial-scale=1.0" name="viewport"&gt;

  &lt;title&gt;Registration Login&lt;/title&gt;
  &lt;meta content="" name="description"&gt;
  &lt;meta content="" name="keywords"&gt;

  &lt;!-- Favicons --&gt;
  &lt;!--&lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/favicon.png" rel="icon"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/apple-touch-icon.png" rel="apple-touch-icon"&gt;--&gt;
  &lt;!--&lt;link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="icon"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="apple-touch-icon"&gt;--&gt;

  &lt;link rel="icon" type="image/png" href="http://172.16.30.46/laravel-base/public/logo1.png" /&gt;

  &lt;!-- Google Fonts --&gt;
  &lt;link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet"&gt;

  &lt;!-- Vendor CSS Files --&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/icofont/icofont.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/animate.css/animate.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.css" rel="stylesheet"&gt;

  &lt;!-- Template Main CSS File --&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/css/style.css" rel="stylesheet"&gt;

  &lt;script src="http://172.16.30.46/laravel-base/public/tinymce.min.js"&gt; &lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/intelphone/build/js/intlTelInput.js"&gt; &lt;/script&gt;
  &lt;link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/intelphone/build/css/intlTelInput.css"&gt;

  &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"&gt;&lt;/script&gt;
  &lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"&gt;&lt;/script&gt;

  &lt;link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-css-toastr.min.css"&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-js-toastr.min.js"&gt; &lt;/script&gt;

  &lt;script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"&gt;
  &lt;/script&gt;

&lt;script src="https://code.jquery.com/jquery-3.3.1.min.js"&gt;&lt;/script&gt;
&lt;script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"&gt;&lt;/script&gt;
&lt;link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /&gt;

&lt;link href="http://172.16.30.46/laravel-base/public/template-admin/gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"&gt;

    &lt;style&gt;
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    &lt;/style&gt;

    &lt;style&gt;
        body {
            font-family: 'Nunito';
        }
    &lt;/style&gt;

    &lt;link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/css/template_base.css"&gt;

&lt;/head&gt;

&lt;body style="background-color: #F7F7F8;"&gt;

    &lt;div class="login relative flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"&gt;

    &lt;div class="shadow-lg bg-white login p-5"&gt;
        &lt;a class="flex items-center justify-center" style="margin-bottom: 25px;" href="http://172.16.30.46/laravel-base/public/registration_login"&gt;
            &lt;img src="http://172.16.30.46/laravel-base/public/logo1.png" &gt;
        &lt;/a&gt;

        &lt;form action="http://172.16.30.46/laravel-base/public/login_account" method="post" class="form-group" autocomplete="off"&gt;
            &lt;input type="hidden" name="_token" value="JZca2AvcgXGLAm2WwIsBwBvR5HHGciX1ZysB3xBB"&gt;            &lt;div class="row"&gt;
                &lt;div class="col-12"&gt;
                    &lt;label for="email"&gt; Email*&lt;/label&gt;
                &lt;input type="email" name="email" id="email" value="" required class="form-control input-lg"&gt; &lt;br&gt;
                &lt;/div&gt;

            &lt;/div&gt;

            &lt;div class="row"&gt;
                &lt;div class="col-12"&gt;
                    &lt;label for="password"&gt; Mot de passe*&lt;/label&gt;
                    &lt;input type="password" name="password" id="password" required class="form-control input-lg"&gt; &lt;br&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;input type="submit" id="submit"  value="Me connecter" class="btn btn-info btn-block submitlink" /&gt;

            &lt;div class="text-right"&gt;
                &lt;a class="forgot_link" href="http://172.16.30.46/laravel-base/public/forgot_password"&gt; Mot de passe oublié&lt;/a&gt; &lt;br&gt;
            &lt;/div&gt;

        &lt;/form&gt;
        &lt;p  class="text-center"&gt; je n'ai pas de Compte ,
            &lt;a href="http://172.16.30.46/laravel-base/public/registration_page" class="text-primary urllink" &gt;
                je m'inscris            &lt;/a&gt;
        &lt;/p&gt;
    &lt;/div&gt;

    &lt;script&gt;
        function validate_form(){
            pwd1 = $("#password").val();
            //pwd2 = $("#password2").val();
            var format = /[ `!@#$%^&amp;*()_+\-=\[\]{};':"\\|,.&lt;&gt;\/?~]/;
            //if(pwd1 == pwd2){
                if(pwd1.length &gt;=8 &amp;&amp; pwd1.length &lt;= 16){
                    //if(pwd1.match(/[A-Z]/) &amp;&amp; pwd1.match(/[0-9]/) &amp;&amp; format.test(pwd1)){
                    if(pwd1.match(/[A-Z]/) &amp;&amp; pwd1.match(/[0-9]/)){
                        //toastr.success("form correct");
                        return true;
                    }
                    else{
                        toastr.warning('Un mot de passe contient au moins une majuscule et un chiffre');
                        return false;
                    }
                }
                else if(pwd1.length &gt; 16){
                    toastr.warning('La taille maximale d&amp;#039;un mot de passe est de 16 caractéres');
                    return false;

                }
                else{
                    toastr.warning('La taille minimale d&amp;#039;un mot de passe est de 8 caractéres');
                    return false;
                }
            return false;
        }
    &lt;/script&gt;

    &lt;div&gt;

  &lt;!-- ======= Footer ======= --&gt;

  &lt;a href="#" class="back-to-top"&gt;&lt;i class="icofont-simple-up"&gt;&lt;/i&gt;&lt;/a&gt;

  &lt;!-- Vendor JS Files --&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery/jquery.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery.easing/jquery.easing.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/php-email-form/validate.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery-sticky/jquery.sticky.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/waypoints/jquery.waypoints.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/counterup/counterup.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/owl.carousel.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/isotope-layout/isotope.pkgd.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.js"&gt;&lt;/script&gt;

  &lt;!-- Template Main JS File --&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/js/main.js"&gt;&lt;/script&gt;

  &lt;/body&gt;

&lt;/html&gt;
</code></pre>
<div id="execution-results-GETregistration_login" hidden>
    <blockquote>Received response<span id="execution-response-status-GETregistration_login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETregistration_login"></code></pre>
</div>
<div id="execution-error-GETregistration_login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETregistration_login"></code></pre>
</div>
<form id="form-GETregistration_login" data-method="GET" data-path="registration_login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETregistration_login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETregistration_login" onclick="tryItOut('GETregistration_login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETregistration_login" onclick="cancelTryOut('GETregistration_login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETregistration_login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>registration_login</code></b>
</p>
</form>
<h2>Change your parameters</h2>
<p>This page allows the user to modify his profile</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/change_your_parameters" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/change_your_parameters"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETchange_your_parameters" hidden>
    <blockquote>Received response<span id="execution-response-status-GETchange_your_parameters"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETchange_your_parameters"></code></pre>
</div>
<div id="execution-error-GETchange_your_parameters" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETchange_your_parameters"></code></pre>
</div>
<form id="form-GETchange_your_parameters" data-method="GET" data-path="change_your_parameters" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETchange_your_parameters', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETchange_your_parameters" onclick="tryItOut('GETchange_your_parameters');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETchange_your_parameters" onclick="cancelTryOut('GETchange_your_parameters');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETchange_your_parameters" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>change_your_parameters</code></b>
</p>
</form>
<h2>Forgot_password</h2>
<p>This page allows the user to enter his email address in order to receive a password reset email</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/forgot_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/forgot_password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;

&lt;head&gt;
  &lt;meta charset="utf-8"&gt;
  &lt;meta content="width=device-width, initial-scale=1.0" name="viewport"&gt;

  &lt;title&gt;Forgot Password&lt;/title&gt;
  &lt;meta content="" name="description"&gt;
  &lt;meta content="" name="keywords"&gt;

  &lt;!-- Favicons --&gt;
  &lt;!--&lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/favicon.png" rel="icon"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/apple-touch-icon.png" rel="apple-touch-icon"&gt;--&gt;
  &lt;!--&lt;link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="icon"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="apple-touch-icon"&gt;--&gt;

  &lt;link rel="icon" type="image/png" href="http://172.16.30.46/laravel-base/public/logo1.png" /&gt;

  &lt;!-- Google Fonts --&gt;
  &lt;link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet"&gt;

  &lt;!-- Vendor CSS Files --&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/icofont/icofont.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/animate.css/animate.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.css" rel="stylesheet"&gt;

  &lt;!-- Template Main CSS File --&gt;
  &lt;link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/css/style.css" rel="stylesheet"&gt;

  &lt;script src="http://172.16.30.46/laravel-base/public/tinymce.min.js"&gt; &lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/intelphone/build/js/intlTelInput.js"&gt; &lt;/script&gt;
  &lt;link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/intelphone/build/css/intlTelInput.css"&gt;

  &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"&gt;&lt;/script&gt;
  &lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"&gt;&lt;/script&gt;

  &lt;link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-css-toastr.min.css"&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-js-toastr.min.js"&gt; &lt;/script&gt;

  &lt;script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"&gt;
  &lt;/script&gt;

&lt;script src="https://code.jquery.com/jquery-3.3.1.min.js"&gt;&lt;/script&gt;
&lt;script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"&gt;&lt;/script&gt;
&lt;link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /&gt;

&lt;link href="http://172.16.30.46/laravel-base/public/template-admin/gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"&gt;

    &lt;style&gt;
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    &lt;/style&gt;

    &lt;style&gt;
        body {
            font-family: 'Nunito';
        }
    &lt;/style&gt;

    &lt;link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/css/template_base.css"&gt;

&lt;/head&gt;

&lt;body style="background-color: #F7F7F8;"&gt;

    &lt;div class="login relative flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"&gt;
            &lt;div class="shadow-lg bg-white login p-5"&gt;
        &lt;a class="flex items-center justify-center" style="margin-bottom: 25px;" href="http://172.16.30.46/laravel-base/public/registration_login"&gt;
            &lt;img src="http://172.16.30.46/laravel-base/public/logo1.png" &gt;
        &lt;/a&gt;

        &lt;div class="text-center" style="margin-bottom: 25px;"&gt;
            &lt;h3&gt;Retrouver mon mot de passe&lt;/h3&gt;
            &lt;h6&gt;Saisissez votre e-mail pour recevoir un mail vous permettant de &lt;br&gt; réinitialiser votre mot de passe&lt;/h6&gt;
        &lt;/div&gt;

        &lt;form action="http://172.16.30.46/laravel-base/public/send_email_forgot_password" method="post" class="form-group" autocomplete="off"&gt;
            &lt;input type="hidden" name="_token" value="JZca2AvcgXGLAm2WwIsBwBvR5HHGciX1ZysB3xBB"&gt;            &lt;div class="row"&gt;
                &lt;div class="col-12"&gt;
                &lt;input type="email"  name="email" id="email" value="" required class="form-control "  placeholder="Email*"&gt;
                &lt;/div&gt;
            &lt;/div&gt; &lt;br&gt;

            &lt;input type="submit" value="Envoyer"  class="btn btn-block btn-info submitlink"&gt;
        &lt;/form&gt; &lt;br&gt;
        &lt;div class="row"&gt;
            &lt;div class="p col-md-5 col-sm-12" &gt;
                je n'ai pas de Compte , &lt;a href="http://172.16.30.46/laravel-base/public/registration_page" class="text-primary"&gt; je m'inscris &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="p offset-md-2 col-md-5 col-sm-12" &gt;
                j'ai déjà un compte , &lt;a href="http://172.16.30.46/laravel-base/public/registration_login"  class="text-primary" &gt;  Je me connecte &lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div&gt;

  &lt;!-- ======= Footer ======= --&gt;

  &lt;a href="#" class="back-to-top"&gt;&lt;i class="icofont-simple-up"&gt;&lt;/i&gt;&lt;/a&gt;

  &lt;!-- Vendor JS Files --&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery/jquery.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery.easing/jquery.easing.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/php-email-form/validate.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery-sticky/jquery.sticky.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/waypoints/jquery.waypoints.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/counterup/counterup.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/owl.carousel.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/isotope-layout/isotope.pkgd.min.js"&gt;&lt;/script&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.js"&gt;&lt;/script&gt;

  &lt;!-- Template Main JS File --&gt;
  &lt;script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/js/main.js"&gt;&lt;/script&gt;

  &lt;/body&gt;

&lt;/html&gt;
</code></pre>
<div id="execution-results-GETforgot_password" hidden>
    <blockquote>Received response<span id="execution-response-status-GETforgot_password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETforgot_password"></code></pre>
</div>
<div id="execution-error-GETforgot_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETforgot_password"></code></pre>
</div>
<form id="form-GETforgot_password" data-method="GET" data-path="forgot_password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETforgot_password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETforgot_password" onclick="tryItOut('GETforgot_password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETforgot_password" onclick="cancelTryOut('GETforgot_password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETforgot_password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>forgot_password</code></b>
</p>
</form>
<h2>Send password reset email</h2>
<p>Send password reset email to a user</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/send_email_forgot_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"repellendus"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/send_email_forgot_password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "repellendus"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTsend_email_forgot_password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTsend_email_forgot_password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTsend_email_forgot_password"></code></pre>
</div>
<div id="execution-error-POSTsend_email_forgot_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTsend_email_forgot_password"></code></pre>
</div>
<form id="form-POSTsend_email_forgot_password" data-method="POST" data-path="send_email_forgot_password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTsend_email_forgot_password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTsend_email_forgot_password" onclick="tryItOut('POSTsend_email_forgot_password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTsend_email_forgot_password" onclick="cancelTryOut('POSTsend_email_forgot_password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTsend_email_forgot_password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>send_email_forgot_password</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTsend_email_forgot_password" data-component="body" required  hidden>
<br>
A user's email address</p>

</form>
<h2>Password reset page</h2>
<p>Password reset page</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/reset_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"reset_key":"ad"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/reset_password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "reset_key": "ad"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8" /&gt;
        &lt;meta http-equiv="refresh" content="0;url='http://localhost/delete_email_type'" /&gt;

        &lt;title&gt;Redirecting to http://localhost/delete_email_type&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href="http://localhost/delete_email_type"&gt;http://localhost/delete_email_type&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
<div id="execution-results-GETreset_password" hidden>
    <blockquote>Received response<span id="execution-response-status-GETreset_password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETreset_password"></code></pre>
</div>
<div id="execution-error-GETreset_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETreset_password"></code></pre>
</div>
<form id="form-GETreset_password" data-method="GET" data-path="reset_password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETreset_password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETreset_password" onclick="tryItOut('GETreset_password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETreset_password" onclick="cancelTryOut('GETreset_password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETreset_password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>reset_password</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>reset_key</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="reset_key" data-endpoint="GETreset_password" data-component="body" required  hidden>
<br>
The reset key of the user assigned to it</p>

</form>
<h2>Reset password</h2>
<p>Resetting a user's password</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/reset_password_function" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":20,"password":"itaque","Confirm_Password":"facere"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/reset_password_function"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 20,
    "password": "itaque",
    "Confirm_Password": "facere"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTreset_password_function" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTreset_password_function"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTreset_password_function"></code></pre>
</div>
<div id="execution-error-POSTreset_password_function" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTreset_password_function"></code></pre>
</div>
<form id="form-POSTreset_password_function" data-method="POST" data-path="reset_password_function" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTreset_password_function', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTreset_password_function" onclick="tryItOut('POSTreset_password_function');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTreset_password_function" onclick="cancelTryOut('POSTreset_password_function');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTreset_password_function" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>reset_password_function</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTreset_password_function" data-component="body" required  hidden>
<br>
The id of user</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTreset_password_function" data-component="body" required  hidden>
<br>
The password of user</p>
<p>
<b><code>Confirm_Password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="Confirm_Password" data-endpoint="POSTreset_password_function" data-component="body" required  hidden>
<br>
The confirm password of user</p>

</form>
<h2>Logout</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Function that logout a user</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETlogout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETlogout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETlogout"></code></pre>
</div>
<div id="execution-error-GETlogout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETlogout"></code></pre>
</div>
<form id="form-GETlogout" data-method="GET" data-path="logout" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETlogout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETlogout" onclick="tryItOut('GETlogout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETlogout" onclick="cancelTryOut('GETlogout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETlogout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>logout</code></b>
</p>
<p>
<label id="auth-GETlogout" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETlogout" data-component="header"></label>
</p>
</form>
<h2>Update Password</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>User password modification function</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/password_modification" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"current_password":"eos","password":"voluptas","confirm_password":"nihil"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/password_modification"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "current_password": "eos",
    "password": "voluptas",
    "confirm_password": "nihil"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTpassword_modification" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword_modification"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword_modification"></code></pre>
</div>
<div id="execution-error-POSTpassword_modification" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword_modification"></code></pre>
</div>
<form id="form-POSTpassword_modification" data-method="POST" data-path="password_modification" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword_modification', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword_modification" onclick="tryItOut('POSTpassword_modification');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword_modification" onclick="cancelTryOut('POSTpassword_modification');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword_modification" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password_modification</code></b>
</p>
<p>
<label id="auth-POSTpassword_modification" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTpassword_modification" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>current_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="current_password" data-endpoint="POSTpassword_modification" data-component="body" required  hidden>
<br>
The current password</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTpassword_modification" data-component="body" required  hidden>
<br>
The new password of user</p>
<p>
<b><code>confirm_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="confirm_password" data-endpoint="POSTpassword_modification" data-component="body" required  hidden>
<br>
The confirm password of user</p>

</form>
<h2>Resetting email address</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Mail sending function for updating an email for a user</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/email_modification" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"nam","password":"est"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/email_modification"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "nam",
    "password": "est"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTemail_modification" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTemail_modification"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTemail_modification"></code></pre>
</div>
<div id="execution-error-POSTemail_modification" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTemail_modification"></code></pre>
</div>
<form id="form-POSTemail_modification" data-method="POST" data-path="email_modification" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTemail_modification', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTemail_modification" onclick="tryItOut('POSTemail_modification');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTemail_modification" onclick="cancelTryOut('POSTemail_modification');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTemail_modification" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>email_modification</code></b>
</p>
<p>
<label id="auth-POSTemail_modification" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTemail_modification" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTemail_modification" data-component="body" required  hidden>
<br>
The email of user</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTemail_modification" data-component="body" required  hidden>
<br>
The  password of user</p>

</form>
<h2>Email address update</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Email update function following the email address reset</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/email_modification_active" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"fuga"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/email_modification_active"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "fuga"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETemail_modification_active" hidden>
    <blockquote>Received response<span id="execution-response-status-GETemail_modification_active"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETemail_modification_active"></code></pre>
</div>
<div id="execution-error-GETemail_modification_active" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETemail_modification_active"></code></pre>
</div>
<form id="form-GETemail_modification_active" data-method="GET" data-path="email_modification_active" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETemail_modification_active', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETemail_modification_active" onclick="tryItOut('GETemail_modification_active');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETemail_modification_active" onclick="cancelTryOut('GETemail_modification_active');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETemail_modification_active" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>email_modification_active</code></b>
</p>
<p>
<label id="auth-GETemail_modification_active" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETemail_modification_active" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="GETemail_modification_active" data-component="body" required  hidden>
<br>
The email of user</p>

</form>
<h2>Profile update</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>User profile modification function</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/profile_modification" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"eos","surname":"fuga","sex":"eos","birthday":"blanditiis","Phone_number":15}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/profile_modification"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "eos",
    "surname": "fuga",
    "sex": "eos",
    "birthday": "blanditiis",
    "Phone_number": 15
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTprofile_modification" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTprofile_modification"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTprofile_modification"></code></pre>
</div>
<div id="execution-error-POSTprofile_modification" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTprofile_modification"></code></pre>
</div>
<form id="form-POSTprofile_modification" data-method="POST" data-path="profile_modification" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTprofile_modification', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTprofile_modification" onclick="tryItOut('POSTprofile_modification');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTprofile_modification" onclick="cancelTryOut('POSTprofile_modification');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTprofile_modification" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>profile_modification</code></b>
</p>
<p>
<label id="auth-POSTprofile_modification" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTprofile_modification" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTprofile_modification" data-component="body" required  hidden>
<br>
The name of user</p>
<p>
<b><code>surname</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="surname" data-endpoint="POSTprofile_modification" data-component="body" required  hidden>
<br>
The surname of user</p>
<p>
<b><code>sex</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="sex" data-endpoint="POSTprofile_modification" data-component="body" required  hidden>
<br>
The sex of user</p>
<p>
<b><code>birthday</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="birthday" data-endpoint="POSTprofile_modification" data-component="body" required  hidden>
<br>
The birthday of user</p>
<p>
<b><code>Phone_number</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="Phone_number" data-endpoint="POSTprofile_modification" data-component="body" required  hidden>
<br>
The phone number of user</p>

</form>
<h2>User registration</h2>
<p>User registration function with sending account activation email</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/registration_account" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"aut","surname":"quod","sex":"aut","birthday":"sint","Phone_number":7,"password":"error","confirm_password":"rerum","email":"ut"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/registration_account"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "aut",
    "surname": "quod",
    "sex": "aut",
    "birthday": "sint",
    "Phone_number": 7,
    "password": "error",
    "confirm_password": "rerum",
    "email": "ut"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTregistration_account" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTregistration_account"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTregistration_account"></code></pre>
</div>
<div id="execution-error-POSTregistration_account" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTregistration_account"></code></pre>
</div>
<form id="form-POSTregistration_account" data-method="POST" data-path="registration_account" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTregistration_account', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTregistration_account" onclick="tryItOut('POSTregistration_account');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTregistration_account" onclick="cancelTryOut('POSTregistration_account');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTregistration_account" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>registration_account</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The name of user</p>
<p>
<b><code>surname</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="surname" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The surname of user</p>
<p>
<b><code>sex</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="sex" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The sex of user</p>
<p>
<b><code>birthday</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="birthday" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The birthday of user</p>
<p>
<b><code>Phone_number</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="Phone_number" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The phone number of user</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The password of user</p>
<p>
<b><code>confirm_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="confirm_password" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The confirm password of user</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The email of user</p>

</form>
<h2>Account activation</h2>
<p>Function that allows the activation of a user's account</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/activation_account" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":9}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/activation_account"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 9
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8" /&gt;
        &lt;meta http-equiv="refresh" content="0;url='http://172.16.30.46/laravel-base/public/registration_login'" /&gt;

        &lt;title&gt;Redirecting to http://172.16.30.46/laravel-base/public/registration_login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href="http://172.16.30.46/laravel-base/public/registration_login"&gt;http://172.16.30.46/laravel-base/public/registration_login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
<div id="execution-results-GETactivation_account" hidden>
    <blockquote>Received response<span id="execution-response-status-GETactivation_account"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETactivation_account"></code></pre>
</div>
<div id="execution-error-GETactivation_account" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETactivation_account"></code></pre>
</div>
<form id="form-GETactivation_account" data-method="GET" data-path="activation_account" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETactivation_account', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETactivation_account" onclick="tryItOut('GETactivation_account');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETactivation_account" onclick="cancelTryOut('GETactivation_account');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETactivation_account" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>activation_account</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETactivation_account" data-component="body" required  hidden>
<br>
The id of user</p>

</form>
<h2>Authentification</h2>
<p>Function that login a user</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/login_account" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"dolore","password":"consequatur"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/login_account"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "dolore",
    "password": "consequatur"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTlogin_account" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTlogin_account"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogin_account"></code></pre>
</div>
<div id="execution-error-POSTlogin_account" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogin_account"></code></pre>
</div>
<form id="form-POSTlogin_account" data-method="POST" data-path="login_account" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTlogin_account', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTlogin_account" onclick="tryItOut('POSTlogin_account');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTlogin_account" onclick="cancelTryOut('POSTlogin_account');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTlogin_account" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>login_account</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTlogin_account" data-component="body" required  hidden>
<br>
The email of user</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTlogin_account" data-component="body" required  hidden>
<br>
The Password of user</p>

</form>
<h2>Update avatar</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Update avatar of user</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://172.16.30.46/laravel-base/public/change_avatar_user" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "image=@C:\Users\l.pejuzo\AppData\Local\Temp\php3760.tmp" </code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/change_avatar_user"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTchange_avatar_user" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTchange_avatar_user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTchange_avatar_user"></code></pre>
</div>
<div id="execution-error-POSTchange_avatar_user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTchange_avatar_user"></code></pre>
</div>
<form id="form-POSTchange_avatar_user" data-method="POST" data-path="change_avatar_user" data-authed="1" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTchange_avatar_user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTchange_avatar_user" onclick="tryItOut('POSTchange_avatar_user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTchange_avatar_user" onclick="cancelTryOut('POSTchange_avatar_user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTchange_avatar_user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>change_avatar_user</code></b>
</p>
<p>
<label id="auth-POSTchange_avatar_user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTchange_avatar_user" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="image" data-endpoint="POSTchange_avatar_user" data-component="body" required  hidden>
<br>
The avatar of a user</p>

</form><h1>Endpoints</h1>
<h2>api/user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://172.16.30.46/laravel-base/public/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>