# Admin


## Page for adding a notification template

<small class="badge badge-darkred">requires authentication</small>

This page is used to fill in the elements necessary to create a template of notification

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/add_email_template" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/add_email_template"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Notification template details page

<small class="badge badge-darkred">requires authentication</small>

This page displays all the data of a notification template

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/view_email_template" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":2}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Function for adding a notification template

<small class="badge badge-darkred">requires authentication</small>

Request for the creation of a notification template

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/register_email_template" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"doloremque","language":"ullam","object":"rerum","description":"ea","link_name":"doloribus","signature":"numquam"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## Notification template modification page

<small class="badge badge-darkred">requires authentication</small>

This page is the interface for modifying a template of notification

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/modify_email_template" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":16}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Function for modifying a notification template

<small class="badge badge-darkred">requires authentication</small>

This function is used to modify a template of notification

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/change_email_template" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"error","language":"omnis","object":"cum","description":"alias","link_name":"qui","signature":"quae"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## Notification template list page

<small class="badge badge-darkred">requires authentication</small>

This page lists all template of notifications

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_email_template" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/all_email_template"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## List of notification templates following a search

<small class="badge badge-darkred">requires authentication</small>

This function allows you to search for notification templates based on a name entered by a user

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_email_template_search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"placeat"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## List of notification templates following a sort (ascending / descending)

<small class="badge badge-darkred">requires authentication</small>

This function sorts the notification templates according to the subject and type of notification

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/sort_email_template" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"cum","categorie":"est"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Page for adding a notification type

<small class="badge badge-darkred">requires authentication</small>

This page is used to fill in the elements necessary to create a type of notification

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/add_email_type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/add_email_type"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Function for adding a notification type

<small class="badge badge-darkred">requires authentication</small>

Request for the creation of a notification type

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/register_email_type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"sint"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## Notification types list page

<small class="badge badge-darkred">requires authentication</small>

This page lists all types of notifications

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_email_type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/all_email_type"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Notification type modification page

<small class="badge badge-darkred">requires authentication</small>

This page is the interface for modifying a type of notification

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/modify_email_type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":16}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Function for modifying a notification type

<small class="badge badge-darkred">requires authentication</small>

This function is used to modify a type of notification

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/change_email_type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":14,"name":"quasi"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## Function to delete a notification type

<small class="badge badge-darkred">requires authentication</small>

This function allows you to delete a notification type only if it is not assigned to a notification template.

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/delete_email_type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":13}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Add a role page

<small class="badge badge-darkred">requires authentication</small>

Add a role page

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/add_role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/add_role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Role update page

<small class="badge badge-darkred">requires authentication</small>

Role update page

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/modify_role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":12}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Delete a role

<small class="badge badge-darkred">requires authentication</small>

Function to delete a role only if the role is not assigned to a user

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/delete_role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":10}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Register a role

<small class="badge badge-darkred">requires authentication</small>

Function that registers a role and its permissions

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/register_role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"suscipit","permissions":[]}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## Update a role

<small class="badge badge-darkred">requires authentication</small>

Function that modifies the permissions assigned to a role

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/register_role_change" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":15,"name":"pariatur","permissions":[]}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## List of roles

<small class="badge badge-darkred">requires authentication</small>

List of roles

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/all_role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Add user Page

<small class="badge badge-darkred">requires authentication</small>

Add user Page

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/add_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/add_user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## View user page

<small class="badge badge-darkred">requires authentication</small>

View page for all of a user's data

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/view_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":9}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## User edit page

<small class="badge badge-darkred">requires authentication</small>

User edit page

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/modify_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":4}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## User Password Change Page

<small class="badge badge-darkred">requires authentication</small>

user password modification page

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/modify_user_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":7}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Change user password

<small class="badge badge-darkred">requires authentication</small>

Function that changes the role of a user

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/change_user_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":3,"password":"praesentium","confirm_password":"veritatis"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## Change role user

<small class="badge badge-darkred">requires authentication</small>

Function that modifies the role of a user (by an admin)

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/change_user_role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id_role":8,"id":3}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## Add user

<small class="badge badge-darkred">requires authentication</small>

Function which creates a user (by an admin)

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/registration_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"error","surname":"ad","sex":"quia","birthday":"voluptatem","Phone_number":18,"password":"sunt","confirm_password":"natus","email":"et"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


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


## Users list page

<small class="badge badge-darkred">requires authentication</small>

This page lists all users

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/all_users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Active user

<small class="badge badge-darkred">requires authentication</small>

Function to activate a user

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/active_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":10}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Deactive user

<small class="badge badge-darkred">requires authentication</small>

Function to deactivate a user

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/deactive_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":13}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Change language

<small class="badge badge-darkred">requires authentication</small>

Function to change the language of a user

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/change_language" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"lang":"dolores"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Dashboard

<small class="badge badge-darkred">requires authentication</small>

Last 30 Days registrations dashboard page

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/dashboard"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## List of users following a search

<small class="badge badge-darkred">requires authentication</small>

List of all users following a search

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_users_search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"qui"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Sort users

<small class="badge badge-darkred">requires authentication</small>

List of all users with sort

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/sort_users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"ratione","categorie":"dolore"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Logging

<small class="badge badge-darkred">requires authentication</small>

Lists of activities from the platform

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_logs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/all_logs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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


## Logging over a period

<small class="badge badge-darkred">requires authentication</small>

List of activities on the platform over a given period

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/all_logs_search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"start_date":"dolor","end_date":"facere"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
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

</form>



