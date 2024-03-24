<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>KitchenKonscious Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
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
            <li>Last updated: August 4 2021</li>
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
    var baseUrl = "http://localhost";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.7.10.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>CMS Management</h1>
<p>APIs for managing basic auth functionality</p>
<h2>CMS Header</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/get-header"
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
<pre><code class="language-json">{
    "status": true,
    "data": {
        "id": 2,
        "slogan": "test",
        "logo": "test.jpg",
        "created_at": "2021-08-24T17:08:44.000000Z",
        "updated_at": "2021-08-25T17:08:44.000000Z"
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-get-header" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-get-header"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get-header"></code></pre>
</div>
<div id="execution-error-GETapi-get-header" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get-header"></code></pre>
</div>
<form id="form-GETapi-get-header" data-method="GET" data-path="api/get-header" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-get-header', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-get-header" onclick="tryItOut('GETapi-get-header');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-get-header" onclick="cancelTryOut('GETapi-get-header');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-get-header" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/get-header</code></b>
</p>
</form>
<h2>CMS Footer</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/get-footer"
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
<pre><code class="language-json">{
    "status": true,
    "data": {
        "id": 1,
        "email": "test@gmail.com",
        "phone": "46546565",
        "address": "test,test address",
        "copyright": "test@2020",
        "terms_condition": "test test",
        "logo": "test.png",
        "created_at": "2021-08-18T17:20:52.000000Z",
        "updated_at": "2021-08-18T17:20:52.000000Z"
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-get-footer" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-get-footer"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get-footer"></code></pre>
</div>
<div id="execution-error-GETapi-get-footer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get-footer"></code></pre>
</div>
<form id="form-GETapi-get-footer" data-method="GET" data-path="api/get-footer" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-get-footer', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-get-footer" onclick="tryItOut('GETapi-get-footer');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-get-footer" onclick="cancelTryOut('GETapi-get-footer');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-get-footer" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/get-footer</code></b>
</p>
</form>
<h2>CMS Banner</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/get-banner"
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
<pre><code class="language-json">{
    "status": true,
    "data": [
        {
            "id": 1,
            "show_order": "1",
            "title": "test",
            "tagline": "test line",
            "btn_name": "testbtn",
            "btn_link": "test_link",
            "image": "test.png",
            "created_at": "2021-08-18T17:25:04.000000Z",
            "updated_at": "2021-08-18T17:25:04.000000Z"
        },
        {
            "id": 2,
            "show_order": "2",
            "title": "test1",
            "tagline": "test line",
            "btn_name": "testbtn",
            "btn_link": "test_link",
            "image": "test.png",
            "created_at": "2021-08-18T17:25:04.000000Z",
            "updated_at": "2021-08-18T17:25:04.000000Z"
        }
    ]
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-get-banner" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-get-banner"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get-banner"></code></pre>
</div>
<div id="execution-error-GETapi-get-banner" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get-banner"></code></pre>
</div>
<form id="form-GETapi-get-banner" data-method="GET" data-path="api/get-banner" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-get-banner', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-get-banner" onclick="tryItOut('GETapi-get-banner');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-get-banner" onclick="cancelTryOut('GETapi-get-banner');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-get-banner" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/get-banner</code></b>
</p>
</form><h1>Contact</h1>
<p>APIs for managing Contact</p>
<h2>Contact-Admin</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/createContact"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Contact uploaded",
    "data": {
        "name": "test",
        "email": "test@gmail.com",
        "message": "test",
        "user_id": "1",
        "updated_at": "2021-07-28T08:33:38.000000Z",
        "created_at": "2021-07-28T08:33:38.000000Z",
        "id": 1
    }
}</code></pre>
<div id="execution-results-POSTapi-createContact" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-createContact"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-createContact"></code></pre>
</div>
<div id="execution-error-POSTapi-createContact" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-createContact"></code></pre>
</div>
<form id="form-POSTapi-createContact" data-method="POST" data-path="api/createContact" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-createContact', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-createContact" onclick="tryItOut('POSTapi-createContact');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-createContact" onclick="cancelTryOut('POSTapi-createContact');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-createContact" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/createContact</code></b>
</p>
</form><h1>Followers management</h1>
<p>APIs for managing Followers</p>
<h2>api/followers</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/followers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 51,
    "action": "FOLLOW \/ UNFOLLOW"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! follower created",
    "data": {
        "following_id": "52",
        "follower_id": 1,
        "updated_at": "2021-07-29T13:01:22.000000Z",
        "created_at": "2021-07-29T13:01:22.000000Z",
        "id": 1
    }
}</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! follower deleted"
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-followers" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-followers"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-followers"></code></pre>
</div>
<div id="execution-error-POSTapi-followers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-followers"></code></pre>
</div>
<form id="form-POSTapi-followers" data-method="POST" data-path="api/followers" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-followers', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-followers" onclick="tryItOut('POSTapi-followers');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-followers" onclick="cancelTryOut('POSTapi-followers');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-followers" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/followers</code></b>
</p>
<p>
<label id="auth-POSTapi-followers" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-followers" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-followers" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>action</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="action" data-endpoint="POSTapi-followers" data-component="body" required  hidden>
<br>

</p>

</form><h1>Product Comment management</h1>
<p>APIs for managing Comments</p>
<h2>api/comments</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "comment": "demo comment",
    "product_id": 480
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! comment created",
    "data": {
        "product_id": "2",
        "comment": "testcomment1",
        "user_id": 1,
        "updated_at": "2021-07-29T12:28:20.000000Z",
        "created_at": "2021-07-29T12:28:20.000000Z",
        "id": 3
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-comments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-comments"></code></pre>
</div>
<div id="execution-error-POSTapi-comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-comments"></code></pre>
</div>
<form id="form-POSTapi-comments" data-method="POST" data-path="api/comments" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-comments" onclick="tryItOut('POSTapi-comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-comments" onclick="cancelTryOut('POSTapi-comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/comments</code></b>
</p>
<p>
<label id="auth-POSTapi-comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-comments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="POSTapi-comments" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>product_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="product_id" data-endpoint="POSTapi-comments" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/comments/{comment}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comments/5"
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
<pre><code class="language-json">{
    "status": true,
    "data": {
        "id": 5,
        "comment": "Qui ut itaque ut eligendi laborum id.",
        "user_id": 2,
        "product_id": 1,
        "created_at": "2021-02-26T10:44:35.000000Z",
        "updated_at": "2021-02-26T10:44:35.000000Z",
        "user": {
            "id": 2,
            "first_name": "Benny",
            "last_name": "Kassulke",
            "email": "rdouglas@example.org",
            "phone": "(559) 940-9961",
            "email_verified_at": "2021-02-26T10:44:27.000000Z",
            "current_team_id": null,
            "profile_photo_path": null,
            "active": 0,
            "created_at": "2021-02-26T10:44:31.000000Z",
            "updated_at": "2021-02-26T10:44:31.000000Z",
            "full_name": "Benny Kassulke",
            "role_name": "CLIENT"
        },
        "post": {
            "id": 1,
            "title": "Voluptatem dolorem reprehenderit qui eum qui eos.",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/0088aa?text=voluptas",
            "user_id": 2,
            "created_at": "2021-02-26T10:44:32.000000Z",
            "updated_at": "2021-02-26T10:44:32.000000Z",
            "user": {
                "id": 2,
                "first_name": "Benny",
                "last_name": "Kassulke",
                "email": "rdouglas@example.org",
                "phone": "(559) 940-9961",
                "email_verified_at": "2021-02-26T10:44:27.000000Z",
                "current_team_id": null,
                "profile_photo_path": null,
                "active": 0,
                "created_at": "2021-02-26T10:44:31.000000Z",
                "updated_at": "2021-02-26T10:44:31.000000Z",
                "full_name": "Benny Kassulke",
                "role_name": "CLIENT"
            }
        }
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-comments--comment-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-comments--comment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-comments--comment-"></code></pre>
</div>
<div id="execution-error-GETapi-comments--comment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-comments--comment-"></code></pre>
</div>
<form id="form-GETapi-comments--comment-" data-method="GET" data-path="api/comments/{comment}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-comments--comment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-comments--comment-" onclick="tryItOut('GETapi-comments--comment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-comments--comment-" onclick="cancelTryOut('GETapi-comments--comment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-comments--comment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/comments/{comment}</code></b>
</p>
<p>
<label id="auth-GETapi-comments--comment-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-comments--comment-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="comment" data-endpoint="GETapi-comments--comment-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>api/comments/{comment}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comments/2501"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "comment": "this is update test"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! comment updated",
    "data": {
        "id": 2501,
        "comment": "this is updated test",
        "user_id": 50,
        "product_id": 480,
        "created_at": "2021-02-26T14:28:25.000000Z",
        "updated_at": "2021-03-01T05:34:01.000000Z",
        "user": {
            "id": 50,
            "first_name": "Gabriella",
            "last_name": "Leuschke",
            "email": "mittie12@example.net",
            "phone": "+1.408.699.5790",
            "email_verified_at": "2021-02-26T10:44:31.000000Z",
            "current_team_id": null,
            "profile_photo_path": null,
            "active": 0,
            "created_at": "2021-02-26T11:10:11.000000Z",
            "updated_at": "2021-02-26T11:10:11.000000Z",
            "full_name": "Gabriella Leuschke",
            "role_name": "CLIENT"
        },
        "post": {
            "id": 480,
            "title": "Perferendis modi dolorum maxime.",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/0022cc?text=consequatur",
            "user_id": 49,
            "created_at": "2021-02-26T11:09:29.000000Z",
            "updated_at": "2021-02-26T11:09:29.000000Z",
            "user": {
                "id": 49,
                "first_name": "Tomas",
                "last_name": "Kub",
                "email": "effie49@example.com",
                "phone": "426.362.8645",
                "email_verified_at": "2021-02-26T10:44:31.000000Z",
                "current_team_id": null,
                "profile_photo_path": null,
                "active": 0,
                "created_at": "2021-02-26T11:09:28.000000Z",
                "updated_at": "2021-02-26T11:09:28.000000Z",
                "full_name": "Tomas Kub",
                "role_name": "CLIENT"
            }
        }
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-PUTapi-comments--comment-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-comments--comment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-comments--comment-"></code></pre>
</div>
<div id="execution-error-PUTapi-comments--comment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-comments--comment-"></code></pre>
</div>
<form id="form-PUTapi-comments--comment-" data-method="PUT" data-path="api/comments/{comment}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-comments--comment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-comments--comment-" onclick="tryItOut('PUTapi-comments--comment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-comments--comment-" onclick="cancelTryOut('PUTapi-comments--comment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-comments--comment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/comments/{comment}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/comments/{comment}</code></b>
</p>
<p>
<label id="auth-PUTapi-comments--comment-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-comments--comment-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="comment" data-endpoint="PUTapi-comments--comment-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="PUTapi-comments--comment-" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/comments/{comment}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comments/deleniti"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! comment deleted"
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-DELETEapi-comments--comment-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-comments--comment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-comments--comment-"></code></pre>
</div>
<div id="execution-error-DELETEapi-comments--comment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-comments--comment-"></code></pre>
</div>
<form id="form-DELETEapi-comments--comment-" data-method="DELETE" data-path="api/comments/{comment}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-comments--comment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-comments--comment-" onclick="tryItOut('DELETEapi-comments--comment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-comments--comment-" onclick="cancelTryOut('DELETEapi-comments--comment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-comments--comment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/comments/{comment}</code></b>
</p>
<p>
<label id="auth-DELETEapi-comments--comment-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-comments--comment-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="DELETEapi-comments--comment-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>task</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="task" data-endpoint="DELETEapi-comments--comment-" data-component="url" required  hidden>
<br>

</p>
</form><h1>Product Wishlist Manamgement</h1>
<p>APIs for managing wishlist</p>
<h2>Product Wishlist</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/wishlist-create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_id": 3
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Product listed in Wishlist"
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-wishlist-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-wishlist-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-wishlist-create"></code></pre>
</div>
<div id="execution-error-POSTapi-wishlist-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-wishlist-create"></code></pre>
</div>
<form id="form-POSTapi-wishlist-create" data-method="POST" data-path="api/wishlist-create" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-wishlist-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-wishlist-create" onclick="tryItOut('POSTapi-wishlist-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-wishlist-create" onclick="cancelTryOut('POSTapi-wishlist-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-wishlist-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/wishlist-create</code></b>
</p>
<p>
<label id="auth-POSTapi-wishlist-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-wishlist-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>product_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="product_id" data-endpoint="POSTapi-wishlist-create" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>Wishlist View</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/wishlist-view/126"
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
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Wishlist view successfully"
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-wishlist-view--product_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-wishlist-view--product_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-wishlist-view--product_id-"></code></pre>
</div>
<div id="execution-error-GETapi-wishlist-view--product_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-wishlist-view--product_id-"></code></pre>
</div>
<form id="form-GETapi-wishlist-view--product_id-" data-method="GET" data-path="api/wishlist-view/{product_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-wishlist-view--product_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-wishlist-view--product_id-" onclick="tryItOut('GETapi-wishlist-view--product_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-wishlist-view--product_id-" onclick="cancelTryOut('GETapi-wishlist-view--product_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-wishlist-view--product_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/wishlist-view/{product_id}</code></b>
</p>
<p>
<label id="auth-GETapi-wishlist-view--product_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-wishlist-view--product_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>product_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="product_id" data-endpoint="GETapi-wishlist-view--product_id-" data-component="url" required  hidden>
<br>

</p>
</form><h1>Products</h1>
<p>APIs for managing products</p>
<h2>Get-All-Products</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/all"
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
<pre><code class="language-json">{
    "status": true,
    "data": [
        {
            "id": 1,
            "product_name": "Product1",
            "product_details": "test",
            "price": "147.00",
            "active": 1,
            "created_at": "2021-07-22T15:34:31.000000Z",
            "updated_at": "2021-07-27T06:11:21.000000Z",
            "deleted_at": null
        },
        {
            "id": 2,
            "product_name": "Product2",
            "product_details": "test",
            "price": "147.00",
            "active": 1,
            "created_at": "2021-07-22T15:46:07.000000Z",
            "updated_at": "2021-07-27T06:11:09.000000Z",
            "deleted_at": null
        }
    ]
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-products-all" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-products-all"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-all"></code></pre>
</div>
<div id="execution-error-GETapi-products-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-all"></code></pre>
</div>
<form id="form-GETapi-products-all" data-method="GET" data-path="api/products/all" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-products-all', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-products-all" onclick="tryItOut('GETapi-products-all');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-products-all" onclick="cancelTryOut('GETapi-products-all');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-products-all" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/products/all</code></b>
</p>
<p>
<label id="auth-GETapi-products-all" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-products-all" data-component="header"></label>
</p>
</form>
<h2>Get-All-Products</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/own"
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
<pre><code class="language-json">{
    "status": true,
    "data": [
        {
            "id": 4,
            "product_name": "test",
            "product_details": "test details",
            "price": "656.00",
            "product_photo_path": "attachFile\/de8ed9348a7f2162258bc5b6ea445e09.jpg",
            "product_video_path": null,
            "user_id": 1,
            "active": 1,
            "created_at": "2021-07-30T11:44:13.000000Z",
            "updated_at": "2021-08-02T09:55:41.000000Z",
            "deleted_at": null
        },
        {
            "id": 5,
            "product_name": "product11",
            "product_details": "productdetails",
            "price": "147.00",
            "product_photo_path": "1627648408.jpg",
            "product_video_path": null,
            "user_id": 1,
            "active": 1,
            "created_at": "2021-07-30T12:33:28.000000Z",
            "updated_at": "2021-07-30T12:33:28.000000Z",
            "deleted_at": null
        },
        {
            "id": 6,
            "product_name": "product117",
            "product_details": "productdetails",
            "price": "147.00",
            "product_photo_path": "1627648947.jpg",
            "product_video_path": "1627648947.asf",
            "user_id": 1,
            "active": 1,
            "created_at": "2021-07-30T12:42:27.000000Z",
            "updated_at": "2021-07-30T12:42:27.000000Z",
            "deleted_at": null
        }
    ]
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-products-own" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-products-own"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-own"></code></pre>
</div>
<div id="execution-error-GETapi-products-own" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-own"></code></pre>
</div>
<form id="form-GETapi-products-own" data-method="GET" data-path="api/products/own" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-products-own', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-products-own" onclick="tryItOut('GETapi-products-own');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-products-own" onclick="cancelTryOut('GETapi-products-own');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-products-own" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/products/own</code></b>
</p>
<p>
<label id="auth-GETapi-products-own" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-products-own" data-component="header"></label>
</p>
</form>
<h2>Get-New-Products</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/new"
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
<pre><code class="language-json">{
    "status": true,
    "data": [
        {
            "id": 1,
            "product_name": "Product1",
            "product_details": "&lt;p&gt;&lt;strong&gt;test&lt;\/strong&gt;&lt;\/p&gt;\n",
            "price": "147.00",
            "active": 1,
            "created_at": "2021-07-22T15:34:31.000000Z",
            "updated_at": "2021-07-27T06:11:21.000000Z",
            "deleted_at": null
        },
        {
            "id": 2,
            "product_name": "Product2",
            "product_details": "&lt;p&gt;test&lt;\/p&gt;\n",
            "price": "147.00",
            "active": 1,
            "created_at": "2021-07-22T15:46:07.000000Z",
            "updated_at": "2021-07-27T06:11:09.000000Z",
            "deleted_at": null
        }
    ]
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-products-new" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-products-new"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-new"></code></pre>
</div>
<div id="execution-error-GETapi-products-new" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-new"></code></pre>
</div>
<form id="form-GETapi-products-new" data-method="GET" data-path="api/products/new" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-products-new', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-products-new" onclick="tryItOut('GETapi-products-new');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-products-new" onclick="cancelTryOut('GETapi-products-new');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-products-new" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/products/new</code></b>
</p>
<p>
<label id="auth-GETapi-products-new" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-products-new" data-component="header"></label>
</p>
</form>
<h2>Get-used-Products</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/used"
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
<pre><code class="language-json">{
    "status": true,
    "data": [
        {
            "id": 1,
            "product_name": "Product1",
            "product_details": "&lt;p&gt;&lt;strong&gt;test&lt;\/strong&gt;&lt;\/p&gt;\n",
            "price": "147.00",
            "active": 1,
            "created_at": "2021-07-22T15:34:31.000000Z",
            "updated_at": "2021-07-27T06:11:21.000000Z",
            "deleted_at": null
        },
        {
            "id": 2,
            "product_name": "Product2",
            "product_details": "&lt;p&gt;test&lt;\/p&gt;\n",
            "price": "147.00",
            "active": 1,
            "created_at": "2021-07-22T15:46:07.000000Z",
            "updated_at": "2021-07-27T06:11:09.000000Z",
            "deleted_at": null
        }
    ]
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-products-used" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-products-used"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-used"></code></pre>
</div>
<div id="execution-error-GETapi-products-used" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-used"></code></pre>
</div>
<form id="form-GETapi-products-used" data-method="GET" data-path="api/products/used" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-products-used', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-products-used" onclick="tryItOut('GETapi-products-used');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-products-used" onclick="cancelTryOut('GETapi-products-used');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-products-used" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/products/used</code></b>
</p>
<p>
<label id="auth-GETapi-products-used" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-products-used" data-component="header"></label>
</p>
</form>
<h2>Product-Create</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_name": "demo comment",
    "product_details": 0,
    "product_photo_path": 0,
    "product_id": 480
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! product uploaded",
    "data": {
        "product_name": "Product1",
        "product_details": "productdetails",
        "price": "147",
        "offer_price": "1",
        "product_photo_path": "1628003559.jpg",
        "product_video_path": "1628003559.asf",
        "user_id": 1,
        "updated_at": "2021-08-03T15:12:39.000000Z",
        "created_at": "2021-08-03T15:12:39.000000Z",
        "id": 9
    }
}</code></pre>
<div id="execution-results-POSTapi-products-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-products-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products-create"></code></pre>
</div>
<div id="execution-error-POSTapi-products-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products-create"></code></pre>
</div>
<form id="form-POSTapi-products-create" data-method="POST" data-path="api/products/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-products-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-products-create" onclick="tryItOut('POSTapi-products-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-products-create" onclick="cancelTryOut('POSTapi-products-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-products-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/products/create</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>product_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product_name" data-endpoint="POSTapi-products-create" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>product_details</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="product_details" data-endpoint="POSTapi-products-create" data-component="body" required  hidden>
<br>
Example: 480
 @bodyParam price string required
</p>
<p>
<b><code>product_photo_path</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="product_photo_path" data-endpoint="POSTapi-products-create" data-component="body" required  hidden>
<br>
Example: 480
 @bodyParam comment string required
</p>
<p>
<b><code>product_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="product_id" data-endpoint="POSTapi-products-create" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>Update-Product</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/update/error"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Product updated",
    "data": {
        "id": 4,
        "product_name": "testpro",
        "product_details": "testproducts",
        "active": "0",
        "created_at": "2021-07-27T07:42:02.000000Z",
        "updated_at": "2021-07-27T08:10:12.000000Z",
        "deleted_at": null
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-PATCHapi-products-update--product-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-products-update--product-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-products-update--product-"></code></pre>
</div>
<div id="execution-error-PATCHapi-products-update--product-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-products-update--product-"></code></pre>
</div>
<form id="form-PATCHapi-products-update--product-" data-method="PATCH" data-path="api/products/update/{product}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-products-update--product-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-products-update--product-" onclick="tryItOut('PATCHapi-products-update--product-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-products-update--product-" onclick="cancelTryOut('PATCHapi-products-update--product-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-products-update--product-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/products/update/{product}</code></b>
</p>
<p>
<label id="auth-PATCHapi-products-update--product-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-products-update--product-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product" data-endpoint="PATCHapi-products-update--product-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>Destroy-Product</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/destroyProduct/dolorum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Product deleted"
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-DELETEapi-destroyProduct--product-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-destroyProduct--product-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-destroyProduct--product-"></code></pre>
</div>
<div id="execution-error-DELETEapi-destroyProduct--product-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-destroyProduct--product-"></code></pre>
</div>
<form id="form-DELETEapi-destroyProduct--product-" data-method="DELETE" data-path="api/destroyProduct/{product}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-destroyProduct--product-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-destroyProduct--product-" onclick="tryItOut('DELETEapi-destroyProduct--product-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-destroyProduct--product-" onclick="cancelTryOut('DELETEapi-destroyProduct--product-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-destroyProduct--product-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/destroyProduct/{product}</code></b>
</p>
<p>
<label id="auth-DELETEapi-destroyProduct--product-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-destroyProduct--product-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product" data-endpoint="DELETEapi-destroyProduct--product-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>task</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="task" data-endpoint="DELETEapi-destroyProduct--product-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>User-Product Rating</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/product-rating"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 126
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! rated successfully",
    "data": {
        "rating": "1",
        "product_id": "1",
        "user_id": 1,
        "updated_at": "2021-07-29T10:38:48.000000Z",
        "created_at": "2021-07-29T10:38:48.000000Z",
        "id": 1
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-product-rating" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-product-rating"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-product-rating"></code></pre>
</div>
<div id="execution-error-POSTapi-product-rating" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-product-rating"></code></pre>
</div>
<form id="form-POSTapi-product-rating" data-method="POST" data-path="api/product-rating" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-product-rating', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-product-rating" onclick="tryItOut('POSTapi-product-rating');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-product-rating" onclick="cancelTryOut('POSTapi-product-rating');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-product-rating" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/product-rating</code></b>
</p>
<p>
<label id="auth-POSTapi-product-rating" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-product-rating" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-product-rating" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>Product Like/Dislike</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/product-like-dislike"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_id": 126,
    "rating": 2
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
{
"status": true,
"message": "Success! Product liked"
}
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-product-like-dislike" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-product-like-dislike"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-product-like-dislike"></code></pre>
</div>
<div id="execution-error-POSTapi-product-like-dislike" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-product-like-dislike"></code></pre>
</div>
<form id="form-POSTapi-product-like-dislike" data-method="POST" data-path="api/product-like-dislike" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-product-like-dislike', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-product-like-dislike" onclick="tryItOut('POSTapi-product-like-dislike');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-product-like-dislike" onclick="cancelTryOut('POSTapi-product-like-dislike');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-product-like-dislike" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/product-like-dislike</code></b>
</p>
<p>
<label id="auth-POSTapi-product-like-dislike" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-product-like-dislike" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>product_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="product_id" data-endpoint="POSTapi-product-like-dislike" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>rating</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="rating" data-endpoint="POSTapi-product-like-dislike" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>Product Share</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/product-share"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 50,
    "product_id": 3
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Product shared"
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-product-share" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-product-share"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-product-share"></code></pre>
</div>
<div id="execution-error-POSTapi-product-share" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-product-share"></code></pre>
</div>
<form id="form-POSTapi-product-share" data-method="POST" data-path="api/product-share" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-product-share', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-product-share" onclick="tryItOut('POSTapi-product-share');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-product-share" onclick="cancelTryOut('POSTapi-product-share');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-product-share" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/product-share</code></b>
</p>
<p>
<label id="auth-POSTapi-product-share" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-product-share" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-product-share" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>product_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="product_id" data-endpoint="POSTapi-product-share" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>Product Like Count</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/product-like-count"
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
<pre><code class="language-json">{
    "status": true,
    "message": "1 number of likes found.",
    "data": 1
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-product-like-count" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product-like-count"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product-like-count"></code></pre>
</div>
<div id="execution-error-GETapi-product-like-count" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product-like-count"></code></pre>
</div>
<form id="form-GETapi-product-like-count" data-method="GET" data-path="api/product-like-count" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product-like-count', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product-like-count" onclick="tryItOut('GETapi-product-like-count');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product-like-count" onclick="cancelTryOut('GETapi-product-like-count');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product-like-count" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product-like-count</code></b>
</p>
<p>
<label id="auth-GETapi-product-like-count" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-product-like-count" data-component="header"></label>
</p>
</form><h1>Recipe Comment management</h1>
<p>APIs for managing Comments</p>
<h2>api/recipecomments</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/recipecomments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "recipe_comment": "demo comment",
    "recipe_id": 480
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! comment created",
    "data": {
        "recipe_id": "1",
        "recipe_comment": "test",
        "user_id": 51,
        "updated_at": "2021-08-02T08:56:10.000000Z",
        "created_at": "2021-08-02T08:56:10.000000Z",
        "id": 1
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-recipecomments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-recipecomments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-recipecomments"></code></pre>
</div>
<div id="execution-error-POSTapi-recipecomments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-recipecomments"></code></pre>
</div>
<form id="form-POSTapi-recipecomments" data-method="POST" data-path="api/recipecomments" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-recipecomments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-recipecomments" onclick="tryItOut('POSTapi-recipecomments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-recipecomments" onclick="cancelTryOut('POSTapi-recipecomments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-recipecomments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/recipecomments</code></b>
</p>
<p>
<label id="auth-POSTapi-recipecomments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-recipecomments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>recipe_comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="recipe_comment" data-endpoint="POSTapi-recipecomments" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>recipe_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="recipe_id" data-endpoint="POSTapi-recipecomments" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/recipecomments/{recipecomment}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/recipecomments/quia"
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
<pre><code class="language-json">{
    "status": true,
    "data": {
        "id": 5,
        "recipe_comment": "Qui ut itaque ut eligendi laborum id.",
        "user_id": 2,
        "recipe_id": 1,
        "created_at": "2021-02-26T10:44:35.000000Z",
        "updated_at": "2021-02-26T10:44:35.000000Z",
        "user": {
            "id": 2,
            "first_name": "Benny",
            "last_name": "Kassulke",
            "email": "rdouglas@example.org",
            "phone": "(559) 940-9961",
            "email_verified_at": "2021-02-26T10:44:27.000000Z",
            "current_team_id": null,
            "profile_photo_path": null,
            "active": 0,
            "created_at": "2021-02-26T10:44:31.000000Z",
            "updated_at": "2021-02-26T10:44:31.000000Z",
            "full_name": "Benny Kassulke",
            "role_name": "CLIENT"
        },
        "post": {
            "id": 1,
            "title": "Voluptatem dolorem reprehenderit qui eum qui eos.",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/0088aa?text=voluptas",
            "user_id": 2,
            "created_at": "2021-02-26T10:44:32.000000Z",
            "updated_at": "2021-02-26T10:44:32.000000Z",
            "user": {
                "id": 2,
                "first_name": "Benny",
                "last_name": "Kassulke",
                "email": "rdouglas@example.org",
                "phone": "(559) 940-9961",
                "email_verified_at": "2021-02-26T10:44:27.000000Z",
                "current_team_id": null,
                "profile_photo_path": null,
                "active": 0,
                "created_at": "2021-02-26T10:44:31.000000Z",
                "updated_at": "2021-02-26T10:44:31.000000Z",
                "full_name": "Benny Kassulke",
                "role_name": "CLIENT"
            }
        }
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-recipecomments--recipecomment-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-recipecomments--recipecomment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-recipecomments--recipecomment-"></code></pre>
</div>
<div id="execution-error-GETapi-recipecomments--recipecomment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-recipecomments--recipecomment-"></code></pre>
</div>
<form id="form-GETapi-recipecomments--recipecomment-" data-method="GET" data-path="api/recipecomments/{recipecomment}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-recipecomments--recipecomment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-recipecomments--recipecomment-" onclick="tryItOut('GETapi-recipecomments--recipecomment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-recipecomments--recipecomment-" onclick="cancelTryOut('GETapi-recipecomments--recipecomment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-recipecomments--recipecomment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/recipecomments/{recipecomment}</code></b>
</p>
<p>
<label id="auth-GETapi-recipecomments--recipecomment-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-recipecomments--recipecomment-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>recipecomment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="recipecomment" data-endpoint="GETapi-recipecomments--recipecomment-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="comment" data-endpoint="GETapi-recipecomments--recipecomment-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>api/recipecomments/{recipecomment}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/recipecomments/eveniet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "comment": "this is update test"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{{
"status": true,
"message": "Success! comment updated",
"data": {
"id": 1,
"recipe_comment": "test1",
"user_id": 51,
"recipe_id": 1,
"created_at": "2021-08-02T08:56:10.000000Z",
"updated_at": "2021-08-02T09:00:13.000000Z"
}
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-PUTapi-recipecomments--recipecomment-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-recipecomments--recipecomment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-recipecomments--recipecomment-"></code></pre>
</div>
<div id="execution-error-PUTapi-recipecomments--recipecomment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-recipecomments--recipecomment-"></code></pre>
</div>
<form id="form-PUTapi-recipecomments--recipecomment-" data-method="PUT" data-path="api/recipecomments/{recipecomment}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-recipecomments--recipecomment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-recipecomments--recipecomment-" onclick="tryItOut('PUTapi-recipecomments--recipecomment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-recipecomments--recipecomment-" onclick="cancelTryOut('PUTapi-recipecomments--recipecomment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-recipecomments--recipecomment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/recipecomments/{recipecomment}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/recipecomments/{recipecomment}</code></b>
</p>
<p>
<label id="auth-PUTapi-recipecomments--recipecomment-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-recipecomments--recipecomment-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>recipecomment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="recipecomment" data-endpoint="PUTapi-recipecomments--recipecomment-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="comment" data-endpoint="PUTapi-recipecomments--recipecomment-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="PUTapi-recipecomments--recipecomment-" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/recipecomments/{recipecomment}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/recipecomments/repudiandae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! comment deleted"
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-DELETEapi-recipecomments--recipecomment-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-recipecomments--recipecomment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-recipecomments--recipecomment-"></code></pre>
</div>
<div id="execution-error-DELETEapi-recipecomments--recipecomment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-recipecomments--recipecomment-"></code></pre>
</div>
<form id="form-DELETEapi-recipecomments--recipecomment-" data-method="DELETE" data-path="api/recipecomments/{recipecomment}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-recipecomments--recipecomment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-recipecomments--recipecomment-" onclick="tryItOut('DELETEapi-recipecomments--recipecomment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-recipecomments--recipecomment-" onclick="cancelTryOut('DELETEapi-recipecomments--recipecomment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-recipecomments--recipecomment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/recipecomments/{recipecomment}</code></b>
</p>
<p>
<label id="auth-DELETEapi-recipecomments--recipecomment-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-recipecomments--recipecomment-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>recipecomment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="recipecomment" data-endpoint="DELETEapi-recipecomments--recipecomment-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>task</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="task" data-endpoint="DELETEapi-recipecomments--recipecomment-" data-component="url" required  hidden>
<br>

</p>
</form><h1>Recipe Wishlist Manamgement</h1>
<p>APIs for managing wishlist</p>
<h2>Recipe Wishlist</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/recipewishlist-create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "recipe_id": 3
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Recipe listed in Wishlist"
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-recipewishlist-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-recipewishlist-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-recipewishlist-create"></code></pre>
</div>
<div id="execution-error-POSTapi-recipewishlist-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-recipewishlist-create"></code></pre>
</div>
<form id="form-POSTapi-recipewishlist-create" data-method="POST" data-path="api/recipewishlist-create" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-recipewishlist-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-recipewishlist-create" onclick="tryItOut('POSTapi-recipewishlist-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-recipewishlist-create" onclick="cancelTryOut('POSTapi-recipewishlist-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-recipewishlist-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/recipewishlist-create</code></b>
</p>
<p>
<label id="auth-POSTapi-recipewishlist-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-recipewishlist-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>recipe_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="recipe_id" data-endpoint="POSTapi-recipewishlist-create" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>Recipe Wishlist View</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/recipewishlist-view/neque"
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
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Wishlist view successfully"
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-recipewishlist-view--recipe_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-recipewishlist-view--recipe_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-recipewishlist-view--recipe_id-"></code></pre>
</div>
<div id="execution-error-GETapi-recipewishlist-view--recipe_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-recipewishlist-view--recipe_id-"></code></pre>
</div>
<form id="form-GETapi-recipewishlist-view--recipe_id-" data-method="GET" data-path="api/recipewishlist-view/{recipe_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-recipewishlist-view--recipe_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-recipewishlist-view--recipe_id-" onclick="tryItOut('GETapi-recipewishlist-view--recipe_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-recipewishlist-view--recipe_id-" onclick="cancelTryOut('GETapi-recipewishlist-view--recipe_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-recipewishlist-view--recipe_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/recipewishlist-view/{recipe_id}</code></b>
</p>
<p>
<label id="auth-GETapi-recipewishlist-view--recipe_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-recipewishlist-view--recipe_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>recipe_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="recipe_id" data-endpoint="GETapi-recipewishlist-view--recipe_id-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>product_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="product_id" data-endpoint="GETapi-recipewishlist-view--recipe_id-" data-component="url" required  hidden>
<br>

</p>
</form><h1>Recipe</h1>
<p>APIs for managing products</p>
<h2>Get-Recipes</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/recipe/all"
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
<pre><code class="language-json">{
    "status": true,
    "data": [
        {
            "id": 1,
            "recipe_name": "recipe1",
            "recipe_description": "gfdgfh bngjhj",
            "recipe_category_id": 1,
            "added_by_id": null,
            "active": 1,
            "created_at": "2021-07-27T11:56:42.000000Z",
            "updated_at": "2021-07-27T12:56:23.000000Z",
            "deleted_at": null
        },
        {
            "id": 3,
            "recipe_name": "recipe2",
            "recipe_description": "recipe2",
            "recipe_category_id": 1,
            "added_by_id": 1,
            "active": 1,
            "created_at": "2021-07-27T12:31:41.000000Z",
            "updated_at": "2021-07-27T12:31:41.000000Z",
            "deleted_at": null
        }
    ]
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-recipe-all" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-recipe-all"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-recipe-all"></code></pre>
</div>
<div id="execution-error-GETapi-recipe-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-recipe-all"></code></pre>
</div>
<form id="form-GETapi-recipe-all" data-method="GET" data-path="api/recipe/all" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-recipe-all', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-recipe-all" onclick="tryItOut('GETapi-recipe-all');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-recipe-all" onclick="cancelTryOut('GETapi-recipe-all');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-recipe-all" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/recipe/all</code></b>
</p>
<p>
<label id="auth-GETapi-recipe-all" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-recipe-all" data-component="header"></label>
</p>
</form>
<h2>Get-Own-Recipes</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/recipe/own"
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
<pre><code class="language-json">{
    "status": true,
    "data": [
        {
            "id": 1,
            "recipe_name": "testrecipe57",
            "recipe_description": "test",
            "recipe_category_id": 1,
            "recipe_video_path": "1627649499.asf",
            "added_by_id": 1,
            "active": 1,
            "created_at": "2021-07-30T12:51:39.000000Z",
            "updated_at": "2021-08-02T07:42:15.000000Z",
            "deleted_at": null
        },
        {
            "id": 2,
            "recipe_name": "recipe2",
            "recipe_description": "recipe2 details",
            "recipe_category_id": 1,
            "recipe_video_path": null,
            "added_by_id": 1,
            "active": 1,
            "created_at": "2021-08-02T07:44:19.000000Z",
            "updated_at": "2021-08-02T07:44:19.000000Z",
            "deleted_at": null
        },
        {
            "id": 3,
            "recipe_name": "recipe23",
            "recipe_description": "recipe23",
            "recipe_category_id": 1,
            "recipe_video_path": null,
            "added_by_id": 1,
            "active": 1,
            "created_at": "2021-08-02T09:55:23.000000Z",
            "updated_at": "2021-08-02T09:55:23.000000Z",
            "deleted_at": null
        }
    ]
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-recipe-own" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-recipe-own"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-recipe-own"></code></pre>
</div>
<div id="execution-error-GETapi-recipe-own" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-recipe-own"></code></pre>
</div>
<form id="form-GETapi-recipe-own" data-method="GET" data-path="api/recipe/own" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-recipe-own', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-recipe-own" onclick="tryItOut('GETapi-recipe-own');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-recipe-own" onclick="cancelTryOut('GETapi-recipe-own');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-recipe-own" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/recipe/own</code></b>
</p>
<p>
<label id="auth-GETapi-recipe-own" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-recipe-own" data-component="header"></label>
</p>
</form>
<h2>Get-Recipe-Category</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/getRecipeCategory"
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
<pre><code class="language-json">{
    "status": true,
    "data": [
        {
            "id": 1,
            "recipe_category": "RecipeCategory1",
            "active": 1,
            "created_at": "2021-07-23T12:12:57.000000Z",
            "updated_at": "2021-07-23T12:13:08.000000Z",
            "deleted_at": null
        }
    ]
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-getRecipeCategory" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-getRecipeCategory"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-getRecipeCategory"></code></pre>
</div>
<div id="execution-error-GETapi-getRecipeCategory" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-getRecipeCategory"></code></pre>
</div>
<form id="form-GETapi-getRecipeCategory" data-method="GET" data-path="api/getRecipeCategory" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-getRecipeCategory', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-getRecipeCategory" onclick="tryItOut('GETapi-getRecipeCategory');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-getRecipeCategory" onclick="cancelTryOut('GETapi-getRecipeCategory');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-getRecipeCategory" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/getRecipeCategory</code></b>
</p>
<p>
<label id="auth-GETapi-getRecipeCategory" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-getRecipeCategory" data-component="header"></label>
</p>
</form>
<h2>Recipe-Create</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/recipe/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Recipe uploaded",
    "data": {
        "recipe_name": "recipe321",
        "recipe_description": "recipe3",
        "recipe_category_id": "1",
        "active": "1",
        "recipe_video_path": "1627649499.asf",
        "added_by_id": 1,
        "updated_at": "2021-07-30T12:51:39.000000Z",
        "created_at": "2021-07-30T12:51:39.000000Z",
        "id": 1
    }
}</code></pre>
<div id="execution-results-POSTapi-recipe-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-recipe-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-recipe-create"></code></pre>
</div>
<div id="execution-error-POSTapi-recipe-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-recipe-create"></code></pre>
</div>
<form id="form-POSTapi-recipe-create" data-method="POST" data-path="api/recipe/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-recipe-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-recipe-create" onclick="tryItOut('POSTapi-recipe-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-recipe-create" onclick="cancelTryOut('POSTapi-recipe-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-recipe-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/recipe/create</code></b>
</p>
</form>
<h2>Update-Recipe</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/recipe/update/sapiente"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Recipe updated",
    "data": {
        "id": 4,
        "recipe_name": "testrecipe5",
        "recipe_description": "test",
        "recipe_category_id": "2",
        "added_by_id": "1",
        "active": "0",
        "created_at": "2021-07-27T13:34:09.000000Z",
        "updated_at": "2021-07-27T13:44:08.000000Z",
        "deleted_at": null
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-PATCHapi-recipe-update--recipe-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-recipe-update--recipe-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-recipe-update--recipe-"></code></pre>
</div>
<div id="execution-error-PATCHapi-recipe-update--recipe-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-recipe-update--recipe-"></code></pre>
</div>
<form id="form-PATCHapi-recipe-update--recipe-" data-method="PATCH" data-path="api/recipe/update/{recipe}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-recipe-update--recipe-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-recipe-update--recipe-" onclick="tryItOut('PATCHapi-recipe-update--recipe-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-recipe-update--recipe-" onclick="cancelTryOut('PATCHapi-recipe-update--recipe-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-recipe-update--recipe-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/recipe/update/{recipe}</code></b>
</p>
<p>
<label id="auth-PATCHapi-recipe-update--recipe-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-recipe-update--recipe-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>recipe</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="recipe" data-endpoint="PATCHapi-recipe-update--recipe-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>Destroy-Recipe</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/destroyRecipe/dolorem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Product deleted"
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-DELETEapi-destroyRecipe--recipe-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-destroyRecipe--recipe-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-destroyRecipe--recipe-"></code></pre>
</div>
<div id="execution-error-DELETEapi-destroyRecipe--recipe-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-destroyRecipe--recipe-"></code></pre>
</div>
<form id="form-DELETEapi-destroyRecipe--recipe-" data-method="DELETE" data-path="api/destroyRecipe/{recipe}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-destroyRecipe--recipe-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-destroyRecipe--recipe-" onclick="tryItOut('DELETEapi-destroyRecipe--recipe-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-destroyRecipe--recipe-" onclick="cancelTryOut('DELETEapi-destroyRecipe--recipe-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-destroyRecipe--recipe-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/destroyRecipe/{recipe}</code></b>
</p>
<p>
<label id="auth-DELETEapi-destroyRecipe--recipe-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-destroyRecipe--recipe-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>recipe</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="recipe" data-endpoint="DELETEapi-destroyRecipe--recipe-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>task</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="task" data-endpoint="DELETEapi-destroyRecipe--recipe-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>User-Recipe Rating</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/recipe-rating"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 126
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! rated successfully",
    "data": {
        "recipe_id": "2",
        "rating": "3",
        "user_id": 51,
        "updated_at": "2021-08-02T08:23:15.000000Z",
        "created_at": "2021-08-02T08:23:15.000000Z",
        "id": 1
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-recipe-rating" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-recipe-rating"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-recipe-rating"></code></pre>
</div>
<div id="execution-error-POSTapi-recipe-rating" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-recipe-rating"></code></pre>
</div>
<form id="form-POSTapi-recipe-rating" data-method="POST" data-path="api/recipe-rating" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-recipe-rating', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-recipe-rating" onclick="tryItOut('POSTapi-recipe-rating');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-recipe-rating" onclick="cancelTryOut('POSTapi-recipe-rating');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-recipe-rating" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/recipe-rating</code></b>
</p>
<p>
<label id="auth-POSTapi-recipe-rating" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-recipe-rating" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-recipe-rating" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>Recipe Like/Dislike</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/recipe-like-dislike"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "recipe_id": 126,
    "rating": 2
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Recipe liked"
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-recipe-like-dislike" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-recipe-like-dislike"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-recipe-like-dislike"></code></pre>
</div>
<div id="execution-error-POSTapi-recipe-like-dislike" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-recipe-like-dislike"></code></pre>
</div>
<form id="form-POSTapi-recipe-like-dislike" data-method="POST" data-path="api/recipe-like-dislike" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-recipe-like-dislike', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-recipe-like-dislike" onclick="tryItOut('POSTapi-recipe-like-dislike');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-recipe-like-dislike" onclick="cancelTryOut('POSTapi-recipe-like-dislike');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-recipe-like-dislike" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/recipe-like-dislike</code></b>
</p>
<p>
<label id="auth-POSTapi-recipe-like-dislike" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-recipe-like-dislike" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>recipe_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="recipe_id" data-endpoint="POSTapi-recipe-like-dislike" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>rating</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="rating" data-endpoint="POSTapi-recipe-like-dislike" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>Recipe Share</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/recipe-share"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 50,
    "recipe_id": 3
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! recipe shared"
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-recipe-share" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-recipe-share"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-recipe-share"></code></pre>
</div>
<div id="execution-error-POSTapi-recipe-share" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-recipe-share"></code></pre>
</div>
<form id="form-POSTapi-recipe-share" data-method="POST" data-path="api/recipe-share" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-recipe-share', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-recipe-share" onclick="tryItOut('POSTapi-recipe-share');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-recipe-share" onclick="cancelTryOut('POSTapi-recipe-share');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-recipe-share" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/recipe-share</code></b>
</p>
<p>
<label id="auth-POSTapi-recipe-share" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-recipe-share" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-recipe-share" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>recipe_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="recipe_id" data-endpoint="POSTapi-recipe-share" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>Recipe Like Count</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/recipe-like-count"
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
<pre><code class="language-json">{
    "status": true,
    "message": "1 number of likes found.",
    "data": 1
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-recipe-like-count" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-recipe-like-count"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-recipe-like-count"></code></pre>
</div>
<div id="execution-error-GETapi-recipe-like-count" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-recipe-like-count"></code></pre>
</div>
<form id="form-GETapi-recipe-like-count" data-method="GET" data-path="api/recipe-like-count" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-recipe-like-count', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-recipe-like-count" onclick="tryItOut('GETapi-recipe-like-count');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-recipe-like-count" onclick="cancelTryOut('GETapi-recipe-like-count');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-recipe-like-count" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/recipe-like-count</code></b>
</p>
<p>
<label id="auth-GETapi-recipe-like-count" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-recipe-like-count" data-component="header"></label>
</p>
</form><h1>Task management</h1>
<p>APIs for managing Tasks</p>
<h2>api/tasks</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks"
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
<pre><code class="language-json">{
    "status": true,
    "data": [
        {
            "id": 1,
            "title": "new task",
            "description": "demo description",
            "user_id": 56,
            "created_at": "2021-02-17T15:24:36.000000Z",
            "updated_at": "2021-02-17T15:24:36.000000Z",
            "user": {
                "id": 56,
                "first_name": "john",
                "last_name": "doe",
                "email": "john@gmail.com",
                "phone": "1122334455",
                "email_verified_at": null,
                "current_team_id": null,
                "profile_photo_path": null,
                "active": 0,
                "created_at": "2021-02-18T12:14:01.000000Z",
                "updated_at": "2021-02-18T12:14:01.000000Z",
                "full_name": "john doe",
                "role_name": "CLIENT"
            }
        },
        {
            "id": 2,
            "title": "new task",
            "description": "demo description",
            "user_id": 56,
            "created_at": "2021-02-17T15:27:09.000000Z",
            "updated_at": "2021-02-17T15:27:09.000000Z",
            "user": {
                "id": 56,
                "first_name": "john",
                "last_name": "doe",
                "email": "john@gmail.com",
                "phone": "1122334455",
                "email_verified_at": null,
                "current_team_id": null,
                "profile_photo_path": null,
                "active": 0,
                "created_at": "2021-02-18T12:14:01.000000Z",
                "updated_at": "2021-02-18T12:14:01.000000Z",
                "full_name": "john doe",
                "role_name": "CLIENT"
            }
        },
        {
            "id": 3,
            "title": "new task",
            "description": "demo description",
            "user_id": 56,
            "created_at": "2021-02-17T15:28:28.000000Z",
            "updated_at": "2021-02-17T15:28:28.000000Z",
            "user": {
                "id": 56,
                "first_name": "john",
                "last_name": "doe",
                "email": "john@gmail.com",
                "phone": "1122334455",
                "email_verified_at": null,
                "current_team_id": null,
                "profile_photo_path": null,
                "active": 0,
                "created_at": "2021-02-18T12:14:01.000000Z",
                "updated_at": "2021-02-18T12:14:01.000000Z",
                "full_name": "john doe",
                "role_name": "CLIENT"
            }
        },
        {
            "id": 5,
            "title": "updated title",
            "description": "updated desc",
            "user_id": 56,
            "created_at": "2021-02-17T15:45:03.000000Z",
            "updated_at": "2021-02-17T15:46:40.000000Z",
            "user": {
                "id": 56,
                "first_name": "john",
                "last_name": "doe",
                "email": "john@gmail.com",
                "phone": "1122334455",
                "email_verified_at": null,
                "current_team_id": null,
                "profile_photo_path": null,
                "active": 0,
                "created_at": "2021-02-18T12:14:01.000000Z",
                "updated_at": "2021-02-18T12:14:01.000000Z",
                "full_name": "john doe",
                "role_name": "CLIENT"
            }
        }
    ]
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-tasks" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-tasks"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tasks"></code></pre>
</div>
<div id="execution-error-GETapi-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tasks"></code></pre>
</div>
<form id="form-GETapi-tasks" data-method="GET" data-path="api/tasks" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-tasks', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-tasks" onclick="tryItOut('GETapi-tasks');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-tasks" onclick="cancelTryOut('GETapi-tasks');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-tasks" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/tasks</code></b>
</p>
<p>
<label id="auth-GETapi-tasks" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-tasks" data-component="header"></label>
</p>
</form>
<h2>api/tasks</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "demo task",
    "description": "demo task description"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! task created",
    "data": {
        "title": "demo task",
        "description": "demo task description",
        "user_id": 56,
        "updated_at": "2021-02-18T13:11:01.000000Z",
        "created_at": "2021-02-18T13:11:01.000000Z",
        "id": 8
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-tasks" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-tasks"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tasks"></code></pre>
</div>
<div id="execution-error-POSTapi-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tasks"></code></pre>
</div>
<form id="form-POSTapi-tasks" data-method="POST" data-path="api/tasks" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-tasks', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-tasks" onclick="tryItOut('POSTapi-tasks');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-tasks" onclick="cancelTryOut('POSTapi-tasks');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-tasks" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/tasks</code></b>
</p>
<p>
<label id="auth-POSTapi-tasks" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-tasks" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-tasks" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-tasks" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/tasks/{task}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks/5"
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
<pre><code class="language-json">{
    "status": true,
    "data": {
        "id": 8,
        "title": "demo task",
        "description": "demo task description",
        "user_id": 56,
        "created_at": "2021-02-18T13:11:01.000000Z",
        "updated_at": "2021-02-18T13:11:01.000000Z",
        "user": {
            "id": 56,
            "first_name": "john",
            "last_name": "doe",
            "email": "john@gmail.com",
            "phone": "1122334455",
            "email_verified_at": null,
            "current_team_id": null,
            "profile_photo_path": null,
            "active": 0,
            "created_at": "2021-02-18T12:14:01.000000Z",
            "updated_at": "2021-02-18T12:14:01.000000Z",
            "full_name": "john doe",
            "role_name": "CLIENT"
        }
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-tasks--task-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-tasks--task-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tasks--task-"></code></pre>
</div>
<div id="execution-error-GETapi-tasks--task-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tasks--task-"></code></pre>
</div>
<form id="form-GETapi-tasks--task-" data-method="GET" data-path="api/tasks/{task}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-tasks--task-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-tasks--task-" onclick="tryItOut('GETapi-tasks--task-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-tasks--task-" onclick="cancelTryOut('GETapi-tasks--task-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-tasks--task-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/tasks/{task}</code></b>
</p>
<p>
<label id="auth-GETapi-tasks--task-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-tasks--task-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>task</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="task" data-endpoint="GETapi-tasks--task-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>api/tasks/{task}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks/5"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "demo task",
    "description": "demo task description"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! task updated",
    "data": {
        "id": 8,
        "title": "updated title",
        "description": "updated description",
        "user_id": 56,
        "created_at": "2021-02-18T13:11:01.000000Z",
        "updated_at": "2021-02-18T13:33:05.000000Z",
        "user": {
            "id": 56,
            "first_name": "john",
            "last_name": "doe",
            "email": "john@gmail.com",
            "phone": "1122334455",
            "email_verified_at": null,
            "current_team_id": null,
            "profile_photo_path": null,
            "active": 0,
            "created_at": "2021-02-18T12:14:01.000000Z",
            "updated_at": "2021-02-18T12:14:01.000000Z",
            "full_name": "john doe",
            "role_name": "CLIENT"
        }
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-PUTapi-tasks--task-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-tasks--task-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-tasks--task-"></code></pre>
</div>
<div id="execution-error-PUTapi-tasks--task-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-tasks--task-"></code></pre>
</div>
<form id="form-PUTapi-tasks--task-" data-method="PUT" data-path="api/tasks/{task}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-tasks--task-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-tasks--task-" onclick="tryItOut('PUTapi-tasks--task-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-tasks--task-" onclick="cancelTryOut('PUTapi-tasks--task-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-tasks--task-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/tasks/{task}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/tasks/{task}</code></b>
</p>
<p>
<label id="auth-PUTapi-tasks--task-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-tasks--task-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>task</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="task" data-endpoint="PUTapi-tasks--task-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-tasks--task-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="PUTapi-tasks--task-" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/tasks/{task}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks/5"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! task deleted"
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-DELETEapi-tasks--task-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-tasks--task-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-tasks--task-"></code></pre>
</div>
<div id="execution-error-DELETEapi-tasks--task-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-tasks--task-"></code></pre>
</div>
<form id="form-DELETEapi-tasks--task-" data-method="DELETE" data-path="api/tasks/{task}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-tasks--task-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-tasks--task-" onclick="tryItOut('DELETEapi-tasks--task-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-tasks--task-" onclick="cancelTryOut('DELETEapi-tasks--task-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-tasks--task-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/tasks/{task}</code></b>
</p>
<p>
<label id="auth-DELETEapi-tasks--task-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-tasks--task-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>task</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="task" data-endpoint="DELETEapi-tasks--task-" data-component="url" required  hidden>
<br>

</p>
</form><h1>User Authentication</h1>
<p>APIs for managing basic auth functionality</p>
<h2>* Register-Monthly-paying-Member</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "John",
    "last_name": "Doe",
    "email": "John@gmail.com",
    "phone": "1122334455"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! registration completed",
    "data": {
        "first_name": "alok",
        "last_name": "ray",
        "username": "alro",
        "gender": "1",
        "dob": "2021-07-30 07:03:10",
        "email": "alro@gmail.com",
        "address": "uk",
        "phone": "15454664414",
        "verified_at": "2021-07-30T09:18:14.382496Z",
        "updated_at": "2021-07-30T09:18:14.000000Z",
        "created_at": "2021-07-30T09:18:14.000000Z",
        "id": 54,
        "full_name": "alok ray",
        "role_name": "CLIENT",
        "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=qwqq&amp;color=7F9CF5&amp;background=EBF4FF",
        "roles": [
            {
                "id": 2,
                "name": "CLIENT",
                "guard_name": "web",
                "created_at": "2021-07-29T08:35:14.000000Z",
                "updated_at": "2021-07-29T08:35:14.000000Z",
                "pivot": {
                    "model_id": 54,
                    "role_id": 2,
                    "model_type": "App\\Models\\User"
                }
            }
        ]
    }
}</code></pre>
<div id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"></code></pre>
</div>
<div id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</div>
<form id="form-POSTapi-register" data-method="POST" data-path="api/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-register" onclick="tryItOut('POSTapi-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-register" onclick="cancelTryOut('POSTapi-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phone" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>Register-Member</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/registermember"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "Jack",
    "last_name": "Doe",
    "email": "jack@gmail.com",
    "phone": "112233445"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! registration completed",
    "data": {
        "first_name": "jack",
        "last_name": "doe",
        "email": "jack@gmail.com",
        "phone": "1122334455",
        "updated_at": "2021-07-26T06:32:50.000000Z",
        "created_at": "2021-07-26T06:32:50.000000Z",
        "id": 56,
        "full_name": "jack doe",
        "role_name": "REGISTERED-MEMBER",
        "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=qwqq&amp;color=7F9CF5&amp;background=EBF4FF",
        "roles": [
            {
                "id": 2,
                "name": "REGISTERED-MEMBER",
                "guard_name": "web",
                "updated_at": "2021-07-26T06:32:50.000000Z",
                "created_at": "2021-07-26T06:32:50.000000Z",
                "pivot": {
                    "model_id": 56,
                    "role_id": 3,
                    "model_type": "App\\Models\\User"
                }
            }
        ]
    }
}</code></pre>
<div id="execution-results-POSTapi-registermember" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-registermember"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-registermember"></code></pre>
</div>
<div id="execution-error-POSTapi-registermember" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-registermember"></code></pre>
</div>
<form id="form-POSTapi-registermember" data-method="POST" data-path="api/registermember" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-registermember', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-registermember" onclick="tryItOut('POSTapi-registermember');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-registermember" onclick="cancelTryOut('POSTapi-registermember');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-registermember" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/registermember</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-registermember" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-registermember" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-registermember" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phone" data-endpoint="POSTapi-registermember" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>Member-Login</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "user@user.com",
    "password": "12345678"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "token": "6|Imv8VDsE27b1sRclxv91emCSIbLpxLmfvK3wFsAa",
    "data": {
        "id": 55,
        "first_name": "Abhik",
        "last_name": "paul",
        "email": "abhik421@gmail.com",
        "phone": "6655443321",
        "email_verified_at": null,
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-02-17T15:13:27.000000Z",
        "updated_at": "2021-02-17T15:13:27.000000Z",
        "full_name": "Abhik paul",
        "role_name": "CLIENT"
    }
}</code></pre>
<div id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</div>
<div id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</div>
<form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-login" onclick="tryItOut('POSTapi-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-login" onclick="cancelTryOut('POSTapi-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-login" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-login" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>Social Sign up</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/social-login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "John",
    "last_name": "Doe",
    "email": "John@gmail.com",
    "social_id": "1122334455",
    "social_account_type": "social_account_type",
    "device_type": "device type",
    "device_token": "device token"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "token": "2|VqTK5mHnzkLpicZpENqfAXZ5SvT6WmLlTw014ri3",
    "message": "Success! registration completed ?? Success! login successfull",
    "data": {
        "first_name": "John",
        "last_name": "Doe",
        "email": "John@gmaildw.com",
        "social_id": "1122334455",
        "social_account_type": "social_account_type",
        "device_type": "device type",
        "device_token": "device token",
        "updated_at": "2021-06-11T09:43:51.000000Z",
        "created_at": "2021-06-11T09:43:51.000000Z",
        "id": 64,
        "full_name": "John Doe",
        "role_name": "CLIENT",
        "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=John&amp;color=7F9CF5&amp;background=EBF4FF",
        "roles": [
            {
                "id": 2,
                "name": "CLIENT",
                "guard_name": "web",
                "created_at": "2021-06-09T08:25:25.000000Z",
                "updated_at": "2021-06-09T08:25:25.000000Z",
                "pivot": {
                    "model_id": 64,
                    "role_id": 2,
                    "model_type": "App\\Models\\User"
                }
            }
        ]
    }
}</code></pre>
<div id="execution-results-POSTapi-social-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-social-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-social-login"></code></pre>
</div>
<div id="execution-error-POSTapi-social-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-social-login"></code></pre>
</div>
<form id="form-POSTapi-social-login" data-method="POST" data-path="api/social-login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-social-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-social-login" onclick="tryItOut('POSTapi-social-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-social-login" onclick="cancelTryOut('POSTapi-social-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-social-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/social-login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-social-login" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-social-login" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-social-login" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>social_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="social_id" data-endpoint="POSTapi-social-login" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>social_account_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="social_account_type" data-endpoint="POSTapi-social-login" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>device_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="device_type" data-endpoint="POSTapi-social-login" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>device_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="device_token" data-endpoint="POSTapi-social-login" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>Email verification</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/email-verification"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "lueilwitz.caterina@example.com",
    "otp": 1234
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Otp Send successfully",
    "data": {
        "id": 3,
        "first_name": "Makayla",
        "last_name": "Runte",
        "email": "cedrick.schmitt@example.com",
        "phone": "609.587.7230",
        "email_verified_at": "2021-03-11T07:39:50.000000Z",
        "otp": 2430,
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-03-11T07:39:54.000000Z",
        "updated_at": "2021-03-12T06:36:42.000000Z",
        "full_name": "Makayla Runte",
        "role_name": "CLIENT",
        "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Makayla&amp;color=7F9CF5&amp;background=EBF4FF"
    }
}</code></pre>
<div id="execution-results-POSTapi-email-verification" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-email-verification"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-email-verification"></code></pre>
</div>
<div id="execution-error-POSTapi-email-verification" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-email-verification"></code></pre>
</div>
<form id="form-POSTapi-email-verification" data-method="POST" data-path="api/email-verification" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-email-verification', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-email-verification" onclick="tryItOut('POSTapi-email-verification');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-email-verification" onclick="cancelTryOut('POSTapi-email-verification');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-email-verification" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/email-verification</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-email-verification" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>otp</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="otp" data-endpoint="POSTapi-email-verification" data-component="body"  hidden>
<br>

</p>

</form>
<h2>Password Forget</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/forgot-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "lueilwitz.caterina@example.com",
    "password": "danwdjdajw"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! password change successfully",
    "data": {
        "id": 2,
        "first_name": "Emory",
        "last_name": "Wiza",
        "email": "lueilwitz.caterina@example.com",
        "phone": "(345) 744-1545",
        "email_verified_at": "2021-03-05T06:49:30.000000Z",
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-03-05T06:49:37.000000Z",
        "updated_at": "2021-03-08T07:50:35.000000Z",
        "full_name": "Emory Wiza",
        "role_name": "CLIENT",
        "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Emory&amp;color=7F9CF5&amp;background=EBF4FF"
    }
}</code></pre>
<div id="execution-results-POSTapi-forgot-password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-forgot-password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-forgot-password"></code></pre>
</div>
<div id="execution-error-POSTapi-forgot-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-forgot-password"></code></pre>
</div>
<form id="form-POSTapi-forgot-password" data-method="POST" data-path="api/forgot-password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-forgot-password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-forgot-password" onclick="tryItOut('POSTapi-forgot-password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-forgot-password" onclick="cancelTryOut('POSTapi-forgot-password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-forgot-password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/forgot-password</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-forgot-password" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-forgot-password" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/user</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
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
<pre><code class="language-json">{
    "status": true,
    "data": {
        "id": 55,
        "first_name": "Abhik",
        "last_name": "paul",
        "email": "abhik421@gmail.com",
        "phone": "6655443321",
        "email_verified_at": null,
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-02-17T15:13:27.000000Z",
        "updated_at": "2021-02-17T15:13:27.000000Z",
        "full_name": "Abhik paul",
        "role_name": "CLIENT"
    }
}</code></pre>
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
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
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
<p>
<label id="auth-GETapi-user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-user" data-component="header"></label>
</p>
</form>
<h2>Update-Member</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/updatemember/voluptates"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Member updated",
    "data": {
        "id": 56,
        "first_name": "Jack",
        "last_name": "Dawson",
        "email": "jack22@gmail.com",
        "phone": "6655443321",
        "address": "test",
        "email_verified_at": null,
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-07-26T06:32:50.000000Z",
        "updated_at": "2021-07-26T12:30:14.000000Z",
        "full_name": "Jack Dawson",
        "role_name": "REGISTERED-MEMBER",
        "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=q111&amp;color=7F9CF5&amp;background=EBF4FF"
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-PATCHapi-updatemember--member-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-updatemember--member-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-updatemember--member-"></code></pre>
</div>
<div id="execution-error-PATCHapi-updatemember--member-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-updatemember--member-"></code></pre>
</div>
<form id="form-PATCHapi-updatemember--member-" data-method="PATCH" data-path="api/updatemember/{member}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-updatemember--member-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-updatemember--member-" onclick="tryItOut('PATCHapi-updatemember--member-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-updatemember--member-" onclick="cancelTryOut('PATCHapi-updatemember--member-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-updatemember--member-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/updatemember/{member}</code></b>
</p>
<p>
<label id="auth-PATCHapi-updatemember--member-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-updatemember--member-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>member</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="member" data-endpoint="PATCHapi-updatemember--member-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>View-Register-Member-User</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/getRegisterMemberList"
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
{
"status": true,
"data": [
{
"id": 1,
"first_name": "Admin",
"last_name": "Admin",
"email": "admin@admin.com",
"phone": null,
"address": null,
"email_verified_at": null,
"current_team_id": null,
"profile_photo_path": null,
"active": 1,
"created_at": "2021-07-21T12:48:16.000000Z",
"updated_at": "2021-07-21T12:48:16.000000Z",
"full_name": "Admin Admin",
"role_name": "SUPER-ADMIN",
"profile_photo_url": "https://ui-avatars.com/api/?name=Admin&amp;color=7F9CF5&amp;background=EBF4FF"
}
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-getRegisterMemberList" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-getRegisterMemberList"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-getRegisterMemberList"></code></pre>
</div>
<div id="execution-error-GETapi-getRegisterMemberList" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-getRegisterMemberList"></code></pre>
</div>
<form id="form-GETapi-getRegisterMemberList" data-method="GET" data-path="api/getRegisterMemberList" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-getRegisterMemberList', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-getRegisterMemberList" onclick="tryItOut('GETapi-getRegisterMemberList');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-getRegisterMemberList" onclick="cancelTryOut('GETapi-getRegisterMemberList');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-getRegisterMemberList" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/getRegisterMemberList</code></b>
</p>
<p>
<label id="auth-GETapi-getRegisterMemberList" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-getRegisterMemberList" data-component="header"></label>
</p>
</form>
<h2>View-Monthly-Member-User</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/getMonthlyMemberList"
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
{
"status": true,
"data": [
{
"id": 1,
"first_name": "Admin",
"last_name": "Admin",
"email": "admin@admin.com",
"phone": null,
"address": null,
"email_verified_at": null,
"current_team_id": null,
"profile_photo_path": null,
"active": 1,
"created_at": "2021-07-21T12:48:16.000000Z",
"updated_at": "2021-07-21T12:48:16.000000Z",
"full_name": "Admin Admin",
"role_name": "SUPER-ADMIN",
"profile_photo_url": "https://ui-avatars.com/api/?name=Admin&amp;color=7F9CF5&amp;background=EBF4FF"
}
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-getMonthlyMemberList" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-getMonthlyMemberList"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-getMonthlyMemberList"></code></pre>
</div>
<div id="execution-error-GETapi-getMonthlyMemberList" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-getMonthlyMemberList"></code></pre>
</div>
<form id="form-GETapi-getMonthlyMemberList" data-method="GET" data-path="api/getMonthlyMemberList" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-getMonthlyMemberList', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-getMonthlyMemberList" onclick="tryItOut('GETapi-getMonthlyMemberList');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-getMonthlyMemberList" onclick="cancelTryOut('GETapi-getMonthlyMemberList');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-getMonthlyMemberList" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/getMonthlyMemberList</code></b>
</p>
<p>
<label id="auth-GETapi-getMonthlyMemberList" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-getMonthlyMemberList" data-component="header"></label>
</p>
</form>
<h2>Change Password</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/change_password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "old_password": "11111111",
    "new_password": "22222222",
    "confirm_password": "22222222"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! password change successfully",
    "data": {
        "id": 2,
        "first_name": "Emory",
        "last_name": "Wiza",
        "email": "lueilwitz.caterina@example.com",
        "phone": "(345) 744-1545",
        "email_verified_at": "2021-03-05T06:49:30.000000Z",
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-03-05T06:49:37.000000Z",
        "updated_at": "2021-03-08T07:50:35.000000Z",
        "full_name": "Emory Wiza",
        "role_name": "CLIENT",
        "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Emory&amp;color=7F9CF5&amp;background=EBF4FF"
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-change_password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-change_password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-change_password"></code></pre>
</div>
<div id="execution-error-POSTapi-change_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-change_password"></code></pre>
</div>
<form id="form-POSTapi-change_password" data-method="POST" data-path="api/change_password" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-change_password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-change_password" onclick="tryItOut('POSTapi-change_password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-change_password" onclick="cancelTryOut('POSTapi-change_password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-change_password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/change_password</code></b>
</p>
<p>
<label id="auth-POSTapi-change_password" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-change_password" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>old_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="old_password" data-endpoint="POSTapi-change_password" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>new_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="new_password" data-endpoint="POSTapi-change_password" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>confirm_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="confirm_password" data-endpoint="POSTapi-change_password" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/user-block/{user}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-block/adipisci"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-user-block--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-block--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-block--user-"></code></pre>
</div>
<div id="execution-error-POSTapi-user-block--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-block--user-"></code></pre>
</div>
<form id="form-POSTapi-user-block--user-" data-method="POST" data-path="api/user-block/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-block--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-block--user-" onclick="tryItOut('POSTapi-user-block--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-block--user-" onclick="cancelTryOut('POSTapi-user-block--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-block--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user-block/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="POSTapi-user-block--user-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>User Report</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-report"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 126
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! user reported successfully",
    "data": {
        "user_id": "2",
        "report_description": "report",
        "reported_by_id": 1,
        "updated_at": "2021-07-29T12:03:51.000000Z",
        "created_at": "2021-07-29T12:03:51.000000Z",
        "id": 1
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-user-report" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-report"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-report"></code></pre>
</div>
<div id="execution-error-POSTapi-user-report" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-report"></code></pre>
</div>
<form id="form-POSTapi-user-report" data-method="POST" data-path="api/user-report" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-report', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-report" onclick="tryItOut('POSTapi-user-report');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-report" onclick="cancelTryOut('POSTapi-user-report');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-report" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user-report</code></b>
</p>
<p>
<label id="auth-POSTapi-user-report" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-user-report" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-user-report" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/user-block</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-block"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-user-block" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-block"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-block"></code></pre>
</div>
<div id="execution-error-POSTapi-user-block" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-block"></code></pre>
</div>
<form id="form-POSTapi-user-block" data-method="POST" data-path="api/user-block" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-block', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-block" onclick="tryItOut('POSTapi-user-block');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-block" onclick="cancelTryOut('POSTapi-user-block');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-block" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user-block</code></b>
</p>
</form>
<h2>api/user-review</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-review"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "review": "demo comment",
    "user_id": 480
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Review submitted",
    "data": {
        "rating": "1",
        "user_id": "50",
        "review": "test",
        "added_by_id": 1,
        "updated_at": "2021-08-03T06:20:39.000000Z",
        "created_at": "2021-08-03T06:20:39.000000Z",
        "id": 1
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-user-review" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-review"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-review"></code></pre>
</div>
<div id="execution-error-POSTapi-user-review" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-review"></code></pre>
</div>
<form id="form-POSTapi-user-review" data-method="POST" data-path="api/user-review" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-review', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-review" onclick="tryItOut('POSTapi-user-review');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-review" onclick="cancelTryOut('POSTapi-user-review');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-review" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user-review</code></b>
</p>
<p>
<label id="auth-POSTapi-user-review" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-user-review" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>review</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="review" data-endpoint="POSTapi-user-review" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-user-review" data-component="body" required  hidden>
<br>
Example: 480
 @bodyParam rating number required
</p>

</form>
<h2>Favorite Seller</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-favorite"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "favorite_id": 480
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! Favorite Seller submitted",
    "data": {
        "favorite_id": "50",
        "user_id": 1,
        "updated_at": "2021-08-04T06:56:19.000000Z",
        "created_at": "2021-08-04T06:56:19.000000Z",
        "id": 2
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-user-favorite" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-favorite"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-favorite"></code></pre>
</div>
<div id="execution-error-POSTapi-user-favorite" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-favorite"></code></pre>
</div>
<form id="form-POSTapi-user-favorite" data-method="POST" data-path="api/user-favorite" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-favorite', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-favorite" onclick="tryItOut('POSTapi-user-favorite');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-favorite" onclick="cancelTryOut('POSTapi-user-favorite');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-favorite" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user-favorite</code></b>
</p>
<p>
<label id="auth-POSTapi-user-favorite" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-user-favorite" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>favorite_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="favorite_id" data-endpoint="POSTapi-user-favorite" data-component="body" required  hidden>
<br>

</p>

</form><h1>user cart and orders</h1>
<h2>api/user-card-products</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-card-products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "",
    "data": {
        "total_price": 1100,
        "products": {
            "current_page": 1,
            "data": [
                {
                    "id": 3,
                    "product_id": 2,
                    "product": {
                        "id": 2,
                        "product_name": "abc2",
                        "price": "600.00"
                    }
                }
            ],
            "first_page_url": "http:\/\/127.0.0.1:8000\/api\/user-cart-products?page=1",
            "from": 1,
            "last_page": 1,
            "last_page_url": "http:\/\/127.0.0.1:8000\/api\/user-cart-products?page=1",
            "links": [
                {
                    "url": null,
                    "label": "&amp;laquo; Previous",
                    "active": false
                },
                {
                    "url": "http:\/\/127.0.0.1:8000\/api\/user-cart-products?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": null,
                    "label": "Next &amp;raquo;",
                    "active": false
                }
            ],
            "next_page_url": null,
            "path": "http:\/\/127.0.0.1:8000\/api\/user-cart-products",
            "per_page": 10,
            "prev_page_url": null,
            "to": 2,
            "total": 2
        }
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-user-card-products" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-card-products"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-card-products"></code></pre>
</div>
<div id="execution-error-POSTapi-user-card-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-card-products"></code></pre>
</div>
<form id="form-POSTapi-user-card-products" data-method="POST" data-path="api/user-card-products" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-card-products', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-card-products" onclick="tryItOut('POSTapi-user-card-products');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-card-products" onclick="cancelTryOut('POSTapi-user-card-products');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-card-products" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user-card-products</code></b>
</p>
<p>
<label id="auth-POSTapi-user-card-products" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-user-card-products" data-component="header"></label>
</p>
</form>
<h2>api/user-cart-products</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-cart-products"
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
<pre><code class="language-json">{
    "status": true,
    "message": "",
    "data": {
        "total_price": 1100,
        "products": {
            "current_page": 1,
            "data": [
                {
                    "id": 3,
                    "product_id": 2,
                    "product": {
                        "id": 2,
                        "product_name": "abc2",
                        "price": "600.00"
                    }
                }
            ],
            "first_page_url": "http:\/\/127.0.0.1:8000\/api\/user-cart-products?page=1",
            "from": 1,
            "last_page": 1,
            "last_page_url": "http:\/\/127.0.0.1:8000\/api\/user-cart-products?page=1",
            "links": [
                {
                    "url": null,
                    "label": "&amp;laquo; Previous",
                    "active": false
                },
                {
                    "url": "http:\/\/127.0.0.1:8000\/api\/user-cart-products?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": null,
                    "label": "Next &amp;raquo;",
                    "active": false
                }
            ],
            "next_page_url": null,
            "path": "http:\/\/127.0.0.1:8000\/api\/user-cart-products",
            "per_page": 10,
            "prev_page_url": null,
            "to": 2,
            "total": 2
        }
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-user-cart-products" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user-cart-products"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user-cart-products"></code></pre>
</div>
<div id="execution-error-GETapi-user-cart-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user-cart-products"></code></pre>
</div>
<form id="form-GETapi-user-cart-products" data-method="GET" data-path="api/user-cart-products" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user-cart-products', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user-cart-products" onclick="tryItOut('GETapi-user-cart-products');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user-cart-products" onclick="cancelTryOut('GETapi-user-cart-products');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user-cart-products" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user-cart-products</code></b>
</p>
<p>
<label id="auth-GETapi-user-cart-products" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-user-cart-products" data-component="header"></label>
</p>
</form><h1>User cart Management</h1>
<p>APIs for managing basic auth functionality</p>
<h2>My Sales</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-sales"
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
<pre><code class="language-json">{
    "status": true,
    "data": [
        {
            "id": 1,
            "order_id": "OD181628061400",
            "user_id": 1,
            "product_id": 8,
            "quantity": 1,
            "original_price": "147.00",
            "payment_price": "147.00",
            "status": "processing",
            "created_at": "2021-08-04T07:16:40.000000Z",
            "updated_at": "2021-08-04T07:16:40.000000Z",
            "deleted_at": null
        }
    ]
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-user-sales" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user-sales"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user-sales"></code></pre>
</div>
<div id="execution-error-GETapi-user-sales" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user-sales"></code></pre>
</div>
<form id="form-GETapi-user-sales" data-method="GET" data-path="api/user-sales" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user-sales', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user-sales" onclick="tryItOut('GETapi-user-sales');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user-sales" onclick="cancelTryOut('GETapi-user-sales');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user-sales" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user-sales</code></b>
</p>
<p>
<label id="auth-GETapi-user-sales" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-user-sales" data-component="header"></label>
</p>
</form>
<h2>My purchase</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-purchase"
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
<pre><code class="language-json">{
    "status": true,
    "data": [
        {
            "id": 1,
            "order_id": "OD181628061400",
            "user_id": 1,
            "product_id": 8,
            "quantity": 1,
            "original_price": "147.00",
            "payment_price": "147.00",
            "status": "processing",
            "created_at": "2021-08-04T07:16:40.000000Z",
            "updated_at": "2021-08-04T07:16:40.000000Z",
            "deleted_at": null
        }
    ]
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-user-purchase" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user-purchase"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user-purchase"></code></pre>
</div>
<div id="execution-error-GETapi-user-purchase" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user-purchase"></code></pre>
</div>
<form id="form-GETapi-user-purchase" data-method="GET" data-path="api/user-purchase" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user-purchase', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user-purchase" onclick="tryItOut('GETapi-user-purchase');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user-purchase" onclick="cancelTryOut('GETapi-user-purchase');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user-purchase" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user-purchase</code></b>
</p>
<p>
<label id="auth-GETapi-user-purchase" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-user-purchase" data-component="header"></label>
</p>
</form>
<h2>user cart and orders create</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-card-products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "",
    "data": {
        "total_price": 1100,
        "products": {
            "current_page": 1,
            "data": [
                {
                    "id": 3,
                    "product_id": 2,
                    "product": {
                        "id": 2,
                        "product_name": "abc2",
                        "price": "600.00"
                    }
                }
            ],
            "first_page_url": "http:\/\/127.0.0.1:8000\/api\/user-cart-products?page=1",
            "from": 1,
            "last_page": 1,
            "last_page_url": "http:\/\/127.0.0.1:8000\/api\/user-cart-products?page=1",
            "links": [
                {
                    "url": null,
                    "label": "&amp;laquo; Previous",
                    "active": false
                },
                {
                    "url": "http:\/\/127.0.0.1:8000\/api\/user-cart-products?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": null,
                    "label": "Next &amp;raquo;",
                    "active": false
                }
            ],
            "next_page_url": null,
            "path": "http:\/\/127.0.0.1:8000\/api\/user-cart-products",
            "per_page": 10,
            "prev_page_url": null,
            "to": 2,
            "total": 2
        }
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-user-card-products" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-card-products"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-card-products"></code></pre>
</div>
<div id="execution-error-POSTapi-user-card-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-card-products"></code></pre>
</div>
<form id="form-POSTapi-user-card-products" data-method="POST" data-path="api/user-card-products" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-card-products', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-card-products" onclick="tryItOut('POSTapi-user-card-products');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-card-products" onclick="cancelTryOut('POSTapi-user-card-products');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-card-products" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user-card-products</code></b>
</p>
<p>
<label id="auth-POSTapi-user-card-products" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-user-card-products" data-component="header"></label>
</p>
</form>
<h2>user cart and orders create</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user-cart-products"
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
<pre><code class="language-json">{
    "status": true,
    "message": "",
    "data": {
        "total_price": 1100,
        "products": {
            "current_page": 1,
            "data": [
                {
                    "id": 3,
                    "product_id": 2,
                    "product": {
                        "id": 2,
                        "product_name": "abc2",
                        "price": "600.00"
                    }
                }
            ],
            "first_page_url": "http:\/\/127.0.0.1:8000\/api\/user-cart-products?page=1",
            "from": 1,
            "last_page": 1,
            "last_page_url": "http:\/\/127.0.0.1:8000\/api\/user-cart-products?page=1",
            "links": [
                {
                    "url": null,
                    "label": "&amp;laquo; Previous",
                    "active": false
                },
                {
                    "url": "http:\/\/127.0.0.1:8000\/api\/user-cart-products?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": null,
                    "label": "Next &amp;raquo;",
                    "active": false
                }
            ],
            "next_page_url": null,
            "path": "http:\/\/127.0.0.1:8000\/api\/user-cart-products",
            "per_page": 10,
            "prev_page_url": null,
            "to": 2,
            "total": 2
        }
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-user-cart-products" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user-cart-products"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user-cart-products"></code></pre>
</div>
<div id="execution-error-GETapi-user-cart-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user-cart-products"></code></pre>
</div>
<form id="form-GETapi-user-cart-products" data-method="GET" data-path="api/user-cart-products" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user-cart-products', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user-cart-products" onclick="tryItOut('GETapi-user-cart-products');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user-cart-products" onclick="cancelTryOut('GETapi-user-cart-products');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user-cart-products" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user-cart-products</code></b>
</p>
<p>
<label id="auth-GETapi-user-cart-products" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-user-cart-products" data-component="header"></label>
</p>
</form>
<h2>Cart-add</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/add-to-cart"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_id": "1",
    "quantity": "2"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Product successfully added your cart."
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-add-to-cart" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-add-to-cart"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-add-to-cart"></code></pre>
</div>
<div id="execution-error-POSTapi-add-to-cart" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-add-to-cart"></code></pre>
</div>
<form id="form-POSTapi-add-to-cart" data-method="POST" data-path="api/add-to-cart" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-add-to-cart', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-add-to-cart" onclick="tryItOut('POSTapi-add-to-cart');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-add-to-cart" onclick="cancelTryOut('POSTapi-add-to-cart');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-add-to-cart" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/add-to-cart</code></b>
</p>
<p>
<label id="auth-POSTapi-add-to-cart" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-add-to-cart" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>product_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product_id" data-endpoint="POSTapi-add-to-cart" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>quantity</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="quantity" data-endpoint="POSTapi-add-to-cart" data-component="body"  hidden>
<br>
optional
</p>

</form>
<h2>Remove from cart</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/remove-from-cart"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "item_id": "5"
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Product successfully Removed from your cart."
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-DELETEapi-remove-from-cart" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-remove-from-cart"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-remove-from-cart"></code></pre>
</div>
<div id="execution-error-DELETEapi-remove-from-cart" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-remove-from-cart"></code></pre>
</div>
<form id="form-DELETEapi-remove-from-cart" data-method="DELETE" data-path="api/remove-from-cart" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-remove-from-cart', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-remove-from-cart" onclick="tryItOut('DELETEapi-remove-from-cart');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-remove-from-cart" onclick="cancelTryOut('DELETEapi-remove-from-cart');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-remove-from-cart" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/remove-from-cart</code></b>
</p>
<p>
<label id="auth-DELETEapi-remove-from-cart" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-remove-from-cart" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>item_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="item_id" data-endpoint="DELETEapi-remove-from-cart" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>Make Order</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "products": "[\n{\n\"product_id\": 1,\n\"quantity\":1\n},\n{\n\"product_id\": 2,\n\"quantity\":1\n}\n]"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Your order has been successfully Placed."
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-POSTapi-order" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-order"></code></pre>
</div>
<div id="execution-error-POSTapi-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-order"></code></pre>
</div>
<form id="form-POSTapi-order" data-method="POST" data-path="api/order" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-order" onclick="tryItOut('POSTapi-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-order" onclick="cancelTryOut('POSTapi-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/order</code></b>
</p>
<p>
<label id="auth-POSTapi-order" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-order" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>products</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="products" data-endpoint="POSTapi-order" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>Order List</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/order-list"
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
<pre><code class="language-json">{
    "status": true,
    "message": "",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 2,
                "order_id": "OD221627653552",
                "user_id": 2,
                "product_id": 2,
                "quantity": 1,
                "original_price": "600.00",
                "payment_price": "600.00",
                "status": "processing",
                "created_at": "2021-07-30T13:59:12.000000Z",
                "updated_at": "2021-07-30T13:59:12.000000Z",
                "deleted_at": null,
                "product": {
                    "id": 2,
                    "product_name": "abc2"
                }
            },
            {
                "id": 1,
                "order_id": "OD211627653552",
                "user_id": 2,
                "product_id": 1,
                "quantity": 1,
                "original_price": "500.00",
                "payment_price": "500.00",
                "status": "processing",
                "created_at": "2021-07-30T13:59:12.000000Z",
                "updated_at": "2021-07-30T13:59:12.000000Z",
                "deleted_at": null,
                "product": {
                    "id": 1,
                    "product_name": "abc"
                }
            }
        ],
        "first_page_url": "http:\/\/127.0.0.1:8000\/api\/order-list?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http:\/\/127.0.0.1:8000\/api\/order-list?page=1",
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/127.0.0.1:8000\/api\/order-list?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http:\/\/127.0.0.1:8000\/api\/order-list",
        "per_page": 10,
        "prev_page_url": null,
        "to": 2,
        "total": 2
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-order-list" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-order-list"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-order-list"></code></pre>
</div>
<div id="execution-error-GETapi-order-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-order-list"></code></pre>
</div>
<form id="form-GETapi-order-list" data-method="GET" data-path="api/order-list" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-order-list', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-order-list" onclick="tryItOut('GETapi-order-list');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-order-list" onclick="cancelTryOut('GETapi-order-list');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-order-list" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/order-list</code></b>
</p>
<p>
<label id="auth-GETapi-order-list" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-order-list" data-component="header"></label>
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>