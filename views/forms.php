<div class="section">
    <h1>Inputs</h1>
    <div class="silk-example">
        <span class="lang">example</span>
        <div data-example="html">
            <div class="grid-span">
                <div class="row">
                    <div class="span-md-4">
                        <input type="text" value=".ctrl ctrl-sm" class="ctrl ctrl-sm">
                    </div>
                    <div class="span-md-4">
                        <input type="text" value=".ctrl ctrl-md" class="ctrl ctrl-md">
                    </div>
                    <div class="span-md-4">
                        <input type="text" value=".ctrl ctrl-lg" class="ctrl ctrl-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <h1>Standard Form</h1>
    <div class="silk-example">
        <span class="lang">example</span>
        <div data-example="html">
            <form>
                <div class="group">
                    <label for="user_name" class="control-label">Username</label>
                    <input type="text" id="user_name" class="ctrl">
                </div>
                <div class="group">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" id="password" class="ctrl">
                </div>
                <div class="group">
                    <label for="device" class="control-label">Device</label>
                    <select id="device" class="ctrl">
                        <option>-- Choose Device --</option>
                        <optgroup label="DSLAM"></optgroup>
                        <option>Adtran</option>
                        <option>AFC</option>
                        <option>Cisco</option>
                        <option>Marconi</option>
                        <optgroup label="Aggregator"></optgroup>
                        <option>Redback</option>
                        <option>Juniper</option>
                    </select>
                </div>
                <div class="group">
                    <label for="reason" class="control-label">Reason for Logging In</label>
                    <textarea id="reason" class="ctrl"></textarea>
                </div>
                <div class="check">
                    <label class="control-label">
                        <input type="checkbox" id="persist_login">Remember Me</label>
                </div>
                <button type="button" class="btn">Login</button>
            </form>
        </div>
    </div>
</div>
<div class="section">
    <h1>Inline Form</h1>
    <div class="silk-example">
        <span class="lang">example</span>
        <div data-example="html">
            <form class="form-inline">
                <div class="group">
                    <label for="user_name" class="control-label sr">Username</label>
                    <input type="text" id="user_name" placeholder="Username"
                    class="ctrl">
                </div>
                <div class="group">
                    <label for="password" class="control-label sr">Password</label>
                    <input type="password" id="password" placeholder="Password"
                    class="ctrl">
                </div>
                <div class="group">
                    <label for="device" class="control-label sr">Device</label>
                    <select id="device" class="ctrl">
                        <option>-- Choose Device --</option>
                        <optgroup label="DSLAM"></optgroup>
                        <option>Adtran</option>
                        <option>AFC</option>
                        <option>Cisco</option>
                        <option>Marconi</option>
                        <optgroup label="Aggregator"></optgroup>
                        <option>Redback</option>
                        <option>Juniper</option>
                    </select>
                </div>
                <div class="group">
                    <label for="reason" class="control-label sr">Reason for Logging In</label>
                    <textarea id="reason" placeholder="Reason for Logging In"
                    class="ctrl"></textarea>
                </div>
                <div class="check">
                    <label class="control-label">
                        <input type="checkbox" id="persist_login">Remember Me</label>
                </div>
                <button type="button" class="btn">Login</button>
            </form>
        </div>
    </div>
</div>
<div class="section">
    <h1>Horizontal Form</h1>
    <div class="silk-example">
        <span class="lang">example</span>
        <div data-example="html">
            <form class="form-horizontal">
                <div class="group">
                    <label for="user_name" class="control-label span-sm-2">Username</label>
                    <div class="span-sm-10">
                        <input type="text" id="user_name" class="ctrl">
                    </div>
                </div>
                <div class="group">
                    <label for="password" class="control-label span-sm-2">Password</label>
                    <div class="span-sm-10">
                        <input type="password" id="password" class="ctrl">
                    </div>
                </div>
                <div class="group">
                    <label for="device" class="control-label span-sm-2">Device</label>
                    <div class="span-sm-10">
                        <select id="device" class="ctrl">
                            <option>-- Choose Device --</option>
                            <optgroup label="DSLAM"></optgroup>
                            <option>Adtran</option>
                            <option>AFC</option>
                            <option>Cisco</option>
                            <option>Marconi</option>
                            <optgroup label="Aggregator"></optgroup>
                            <option>Redback</option>
                            <option>Juniper</option>
                        </select>
                    </div>
                </div>
                <div class="group">
                    <label for="reason" class="control-label span-sm-2">Reason for Logging In</label>
                    <div class="span-sm-10">
                        <textarea id="reason" class="ctrl"></textarea>
                    </div>
                </div>
                <div class="group">
                    <div class="span-sm-10 span-sm-os-2">
                        <div class="check">
                            <label class="control-label">
                                <input type="checkbox" id="persist_login">Remember Me</label>
                        </div>
                    </div>
                </div>
                <div class="group">
                    <div class="span-sm-10 span-sm-os-2">
                        <button type="button" class="btn">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="section">
    <h1>Controls</h1>
    <div class="section">
        <h2>Inputs</h2>
        <p>All inputs are technically supported, however only via display. Functionality
            is not guaranteed.</p>
        <div class="silk-example">
            <span class="lang">example</span>
            <div data-example="html">
                <div class="span-full">
                    <div class="row">
                        <div class="span-md-2">
                            <input type="text" placeholder="[type=text].ctrl" class="ctrl">
                        </div>
                        <div class="span-md-2">
                            <input type="password" placeholder="[type=password].ctrl" class="ctrl">
                        </div>
                        <div class="span-md-2">
                            <input type="datetime" placeholder="[type=datetime].ctrl" class="ctrl">
                        </div>
                        <div class="span-md-2">
                            <input type="date" placeholder="[type=date].ctrl" class="ctrl">
                        </div>
                        <div class="span-md-2">
                            <input type="datetime-local" placeholder="[type=datetime-local].ctrl"
                            class="ctrl">
                        </div>
                        <div class="span-md-2">
                            <input type="date" placeholder="[type=date].ctrl" class="ctrl">
                        </div>
                        <div class="span-md-2">
                            <input type="month" placeholder="[type=month].ctrl" class="ctrl">
                        </div>
                        <div class="span-md-2">
                            <input type="time" placeholder="[type=time].ctrl" class="ctrl">
                        </div>
                        <div class="span-md-2">
                            <input type="week" placeholder="[type=week].ctrl" class="ctrl">
                        </div>
                        <div class="span-md-2">
                            <input type="number" placeholder="[type=number].ctrl" class="ctrl">
                        </div>
                        <div class="span-md-2">
                            <input type="url" placeholder="[type=url].ctrl" class="ctrl">
                        </div>
                        <div class="span-md-2">
                            <input type="search" placeholder="[type=search].ctrl" class="ctrl">
                        </div>
                        <div class="span-md-2">
                            <input type="tel" placeholder="[type=tel].ctrl" class="ctrl">
                        </div>
                        <div class="span-md-2">
                            <input type="color" placeholder="[type=color].ctrl" class="ctrl">
                        </div>
                        <div class="span-md-2">
                            <input type="email" placeholder="[type=email].ctrl" class="ctrl">
                        </div>
                        <div class="span-md-2">
                            <input type="custom" placeholder="[type=custom].ctrl" class="ctrl">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="silk-example example">
            <span class="lang">html</span>
            <pre data-target="s-inputs" class="prettyprint"></pre>
        </div>
    </div>
</div>
<div class="section">
    <h1>Textarea</h1>
    <p>Set height with
        <code>rows</code>attribute. You can limit resizability with three classes,
        <code>.rs-none</code>,
        <code>.rs-vertical</code>, and
        <code>.rs-horizontal</code>. A fourth class
        <code>.rs-both</code>allows other elements to be resized.</p>
    <div class="silk-example">
        <span class="lang">example</span>
        <div data-example="textareas">
            <div class="span-full">
                <div class="row">
                    <div class="span-md-12">
                        <textarea placeholder="[rows=2].ctrl.rs-both" rows="2" class="rs-both ctrl"></textarea>
                    </div>
                    <div class="span-md-12">
                        <textarea placeholder="[rows=2].ctrl.rs-none" rows="2" class="rs-none ctrl"></textarea>
                    </div>
                    <div class="span-md-12">
                        <textarea placeholder="[rows=2].ctrl.rs-vertical" rows="2" class="rs-vertical ctrl"></textarea>
                    </div>
                    <div class="span-md-12">
                        <textarea placeholder="[rows=2].ctrl.rs-horizontal" rows="2" class="rs-horizontal ctrl"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <h1>Checkbox and Radios</h1>
    <div class="section">
        <h2>Checkboxes</h2>
        <div class="section">
            <h3>Default</h3>
            <div class="silk-example">
                <span class="lang">example</span>
                <div data-example="html">
                    <div class="check">
                        <label>
                            <input type="checkbox">I am one of many you can choose from. You can select multiples.</label>
                    </div>
                    <div class="check">
                        <label>
                            <input type="checkbox">I am one of many you can choose from. You can select multiples.</label>
                    </div>
                    <div class="check disabled">
                        <label>
                            <input type="checkbox" disabled>I am one of many you can choose from. But i don't wanna...</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <h3>Inline</h3>
            <div class="silk-example">
                <span class="lang">example</span>
                <div data-example="html">
                    <div class="check-inline">
                        <label>
                            <input type="checkbox">A.</label>
                    </div>
                    <div class="check-inline">
                        <label>
                            <input type="checkbox">B.</label>
                    </div>
                    <div class="check-inline disabled">
                        <label>
                            <input type="checkbox" disabled>C.</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <h2>Radios</h2>
        <div class="section">
            <h3>Default</h3>
            <div class="silk-example">
                <span class="lang">example</span>
                <div data-example="html">
                    <div class="check">
                        <label>
                            <input type="radio" name="radioExample">I am one of many you can choose from. But you can select only one.</label>
                    </div>
                    <div class="check">
                        <label>
                            <input type="radio" name="radioExample">I am one of many you can choose from. But you can select only one.</label>
                    </div>
                    <div class="check disabled">
                        <label>
                            <input type="radio" disabled name="radioExample">I am one of many you can choose from. But i don't wanna...</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <h3>Inline</h3>
            <div class="silk-example">
                <span class="lang">example</span>
                <div data-example="html">
                    <div class="check-inline">
                        <label>
                            <input type="radio" name="radioExample">A.</label>
                    </div>
                    <div class="check-inline">
                        <label>
                            <input type="radio" name="radioExample">B.</label>
                    </div>
                    <div class="check-inline disabled">
                        <label>
                            <input type="radio" disabled name="radioExample">C.</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <h1>Input States</h1>
    <div class="section">
        <h2>Disabled</h2>
        <div class="silk-example">
            <span class="lang">example</span>
            <div data-example="html">
                <div class="grid">
                    <div class="row">
                        <div class="span-md-12">
                            <input type="text" disabled value="[disabled]" class="ctrl">
                        </div>
                    </div>
                    <div class="row">
                        <div class="span-md-12">
                            <fieldset disabled>
                                <legend>Disabled Inputs via Fieldset</legend>
                                <label for="dis-text">Disabled Input</label>
                                <input type="text" value="disabled..." id="dis-text"
                                class="ctrl">
                                <label for="device">Disabled Input</label>
                                <select id="device" class="ctrl">
                                    <option>-- Choose Device --</option>
                                    <optgroup label="DSLAM"></optgroup>
                                    <option>Adtran</option>
                                    <option>AFC</option>
                                    <option>Cisco</option>
                                    <option>Marconi</option>
                                    <optgroup label="Aggregator"></optgroup>
                                    <option>Redback</option>
                                    <option>Juniper</option>
                                </select>
                                <div class="check">
                                    <label>
                                        <input type="checkbox">Can't check me</label>
                                </div>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <h2>Readonly</h2>
        <div class="silk-example">
            <span class="lang">example</span>
            <div data-example="html">
                <div class="grid">
                    <div class="row">
                        <div class="span-md-12">
                            <input type="text" readonly placeholder="[readonly]" class="ctrl">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <h2>Contextual</h2>
        <div class="silk-example">
            <span class="lang">example</span>
            <div data-example="html">
                <div class="grid">
                    <div class="row">
                        <div class="span-md-12">
                            <div class="group is-success">
                                <label for="success">.is-success</label>
                                <input type="text" id="success" class="ctrl">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span-md-12">
                            <div class="group is-warning">
                                <label for="warning">.is-warning</label>
                                <input type="text" id="warning" class="ctrl">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span-md-12">
                            <div class="group is-error">
                                <label for="error">.is-error</label>
                                <input type="text" id="error" class="ctrl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <h1>Help Text</h1>
    <div class="section">
        <h2>Default</h2>
        <div class="silk-example">
            <span class="lang">example</span>
            <div data-example="html">
                <div class="grid">
                    <div class="row">
                        <div class="span-md-12">
                            <div class="group">
                                <label for="u_id">Username</label>
                                <input type="text" placeholder="Username" id="u_id" class="ctrl">
                                <span class="help">If you do not know your username, you may enter your email address.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>