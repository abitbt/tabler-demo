{{--
    Form Components Demo

    Comprehensive showcase of all form component variations, states, and features.
    Based on Tabler UI form patterns with Laravel Blade components.

    Components:
    - <x-tabler::forms.input>
    - <x-tabler::forms.textarea>
    - <x-tabler::forms.select>
    - <x-tabler::forms.checkbox>
    - <x-tabler::forms.radio>
    - <x-tabler::forms.switch>
    - <x-tabler::forms.input-group>
    - <x-tabler::forms.selectgroup>
    - <x-tabler::forms.selectgroup-item>
    - <x-tabler::forms.label>
    - <x-tabler::forms.help>
    - <x-tabler::forms.hint>
    - <x-tabler::forms.valid-feedback>
    - <x-tabler::forms.invalid-feedback>

    Locations:
    abitbt/tablerui/stubs/resources/views/tabler/forms/*.blade.php
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Form Components" subtitle="Comprehensive showcase of all form component variations" />
@endsection

@section('content')
    <div class="row row-cards">

        {{-- Basic Text Input --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Text Input</x-slot:title>
                    <x-slot:subtitle>Simple text input with label and validation</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::forms.input name="email" label="Email Address" type="email" placeholder="user@example.com"
                        required />

                    <x-tabler::forms.input name="username" label="Username" placeholder="Enter username" />

                    <x-tabler::forms.input name="password" label="Password" type="password" placeholder="Enter password"
                        required />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::forms.input
    name="email"
    label="Email Address"
    type="email"
    placeholder="user@example.com"
    required
/&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Input with Icon --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Input with Icon</x-slot:title>
                    <x-slot:subtitle>Text input with leading or trailing icons</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::forms.input name="search" label="Search" icon="search" placeholder="Search..." />

                    <x-tabler::forms.input name="phone" label="Phone Number" type="tel" icon="phone"
                        iconPosition="start" placeholder="+1 (555) 000-0000" />

                    <x-tabler::forms.input name="loading_example" label="With Loading Spinner" loading
                        placeholder="Processing..." />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::forms.input
    name="search"
    label="Search"
    icon="search"
    placeholder="Search..."
/&gt;

&lt;x-tabler::forms.input
    name="phone"
    icon="phone"
    iconPosition="start"
    placeholder="+1 (555) 000-0000"
/&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Input with Help Text --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Input with Help Text</x-slot:title>
                    <x-slot:subtitle>Additional context and guidance for users</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::forms.input name="api_key" label="API Key"
                        help="You can find your API key in Settings > Integrations" placeholder="Enter your API key"
                        required />

                    <x-tabler::forms.input name="slug" label="URL Slug"
                        help="Only lowercase letters, numbers, and hyphens allowed" placeholder="my-article-slug" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::forms.input
    name="api_key"
    label="API Key"
    help="You can find your API key in Settings"
    required
/&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Input Sizes and Variants --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Input Sizes and Variants</x-slot:title>
                    <x-slot:subtitle>Different sizes and styling options</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::forms.input name="small" label="Small Input" size="sm" placeholder="Small input" />

                    <x-tabler::forms.input name="large" label="Large Input" size="lg" placeholder="Large input" />

                    <x-tabler::forms.input name="light" label="Light Background" class="form-control-light"
                        placeholder="Light variant" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::forms.input size="sm" /&gt;
&lt;x-tabler::forms.input size="lg" /&gt;
&lt;x-tabler::forms.input class="form-control-light" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Textarea --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Textarea</x-slot:title>
                    <x-slot:subtitle>Multi-line text input with auto-resize</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::forms.textarea name="description" label="Description" placeholder="Enter description..."
                        :rows="3" />

                    <x-tabler::forms.textarea name="notes" label="Notes (Auto-resize)" autosize
                        placeholder="Start typing..." help="This textarea automatically grows as you type" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::forms.textarea
    name="description"
    label="Description"
    :rows="3"
/&gt;

&lt;x-tabler::forms.textarea
    name="notes"
    autosize
    help="Auto-grows as you type"
/&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Select Dropdown --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Select Dropdown</x-slot:title>
                    <x-slot:subtitle>Dropdown selection with options and groups</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::forms.select name="country" label="Country" placeholder="Select a country..."
                        :options="[
                            'us' => 'United States',
                            'uk' => 'United Kingdom',
                            'ca' => 'Canada',
                            'au' => 'Australia',
                        ]" required />

                    <x-tabler::forms.select name="fruit" label="Favorite Fruit" :options="[
                        'Citrus' => [
                            'orange' => 'Orange',
                            'lemon' => 'Lemon',
                            'lime' => 'Lime',
                        ],
                        'Berries' => [
                            'strawberry' => 'Strawberry',
                            'blueberry' => 'Blueberry',
                        ],
                    ]" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::forms.select
    name="country"
    label="Country"
    placeholder="Select a country..."
    :options="['us' => 'United States', ...]"
/&gt;

{{-- With optgroups --}}
&lt;x-tabler::forms.select
    :options="[
        'Citrus' => ['orange' => 'Orange'],
        'Berries' => ['strawberry' => 'Strawberry']
    ]"
/&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Checkboxes --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Checkboxes</x-slot:title>
                    <x-slot:subtitle>Single or multiple selection options</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::forms.checkbox name="terms" label="I agree to the terms and conditions" required />

                    <x-tabler::forms.checkbox name="newsletter" label="Subscribe to newsletter"
                        help="Receive weekly updates and promotions" />

                    <x-tabler::forms.checkbox name="remember" label="Remember me" checked />

                    <div class="mb-3">
                        <label class="form-label">Inline Checkboxes</label>
                        <div>
                            <x-tabler::forms.checkbox name="opt1" label="Option 1" class="form-check-inline"
                                :wrapper="false" />
                            <x-tabler::forms.checkbox name="opt2" label="Option 2" class="form-check-inline"
                                :wrapper="false" />
                            <x-tabler::forms.checkbox name="opt3" label="Option 3" class="form-check-inline"
                                :wrapper="false" />
                        </div>
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::forms.checkbox
    name="terms"
    label="I agree to terms"
    required
/&gt;

&lt;x-tabler::forms.checkbox
    name="remember"
    label="Remember me"
    checked
/&gt;

{{-- Inline checkboxes --}}
&lt;x-tabler::forms.checkbox
    name="opt1"
    class="form-check-inline"
    :wrapper="false"
/&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Radio Buttons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Radio Buttons</x-slot:title>
                    <x-slot:subtitle>Single selection from multiple options</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="mb-3">
                        <label class="form-label">Choose a Plan</label>
                        <x-tabler::forms.radio name="plan" value="free" label="Free Plan"
                            help="Basic features only" checked />
                        <x-tabler::forms.radio name="plan" value="pro" label="Pro Plan"
                            help="Advanced features included" />
                        <x-tabler::forms.radio name="plan" value="enterprise" label="Enterprise Plan"
                            help="All features + support" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Inline Radios</label>
                        <div>
                            <x-tabler::forms.radio name="size" value="sm" label="Small"
                                class="form-check-inline" :wrapper="false" />
                            <x-tabler::forms.radio name="size" value="md" label="Medium"
                                class="form-check-inline" :wrapper="false" checked />
                            <x-tabler::forms.radio name="size" value="lg" label="Large"
                                class="form-check-inline" :wrapper="false" />
                        </div>
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::forms.radio
    name="plan"
    value="free"
    label="Free Plan"
    checked
/&gt;
&lt;x-tabler::forms.radio
    name="plan"
    value="pro"
    label="Pro Plan"
/&gt;

{{-- Inline radios --}}
&lt;x-tabler::forms.radio
    name="size"
    value="sm"
    class="form-check-inline"
    :wrapper="false"
/&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Toggle Switches --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Toggle Switches</x-slot:title>
                    <x-slot:subtitle>On/off toggle controls</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::forms.switch name="notifications" label="Enable notifications" checked />

                    <x-tabler::forms.switch name="darkmode" label="Dark mode" />

                    <x-tabler::forms.switch name="2fa" label="Two-factor authentication"
                        help="Add an extra layer of security to your account" />

                    <x-tabler::forms.switch name="public" label="Public profile" class="form-check-reverse" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::forms.switch
    name="notifications"
    label="Enable notifications"
    checked
/&gt;

&lt;x-tabler::forms.switch
    name="2fa"
    help="Add extra security"
/&gt;

{{-- Reverse layout --}}
&lt;x-tabler::forms.switch
    name="public"
    class="form-check-reverse"
/&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Input Groups --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Input Groups</x-slot:title>
                    <x-slot:subtitle>Inputs with prepend/append addons</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <x-tabler::forms.input-group prepend="@">
                            <input type="text" class="form-control" placeholder="username" />
                        </x-tabler::forms.input-group>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Website</label>
                        <x-tabler::forms.input-group prepend="https://" append=".com">
                            <input type="text" class="form-control" placeholder="example" />
                        </x-tabler::forms.input-group>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <x-tabler::forms.input-group prepend="$" append=".00">
                            <input type="number" class="form-control" placeholder="0" />
                        </x-tabler::forms.input-group>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Search</label>
                        <x-tabler::forms.input-group>
                            <input type="text" class="form-control" placeholder="Search..." />
                            <button class="btn btn-primary" type="button">Search</button>
                        </x-tabler::forms.input-group>
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::forms.input-group prepend="@"&gt;
    &lt;input type="text" class="form-control" /&gt;
&lt;/x-tabler::forms.input-group&gt;

&lt;x-tabler::forms.input-group prepend="$" append=".00"&gt;
    &lt;input type="number" class="form-control" /&gt;
&lt;/x-tabler::forms.input-group&gt;

{{-- With button --}}
&lt;x-tabler::forms.input-group&gt;
    &lt;input type="text" class="form-control" /&gt;
    &lt;button class="btn btn-primary"&gt;Search&lt;/button&gt;
&lt;/x-tabler::forms.input-group&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Select Groups --}}
        <div class="col-md-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Select Groups</x-slot:title>
                    <x-slot:subtitle>Visual button-style selection groups</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Choose Plan (Default Style)</label>
                            <x-tabler::forms.selectgroup>
                                <x-tabler::forms.selectgroup-item name="plan_default" value="free" text="Free"
                                    checked />
                                <x-tabler::forms.selectgroup-item name="plan_default" value="pro" text="Pro" />
                                <x-tabler::forms.selectgroup-item name="plan_default" value="enterprise"
                                    text="Enterprise" />
                            </x-tabler::forms.selectgroup>

                            <label class="form-label">Choose Size (Pills Style)</label>
                            <x-tabler::forms.selectgroup class="form-selectgroup-pills">
                                <x-tabler::forms.selectgroup-item name="size_pills" value="sm" text="Small" />
                                <x-tabler::forms.selectgroup-item name="size_pills" value="md" text="Medium"
                                    checked />
                                <x-tabler::forms.selectgroup-item name="size_pills" value="lg" text="Large" />
                            </x-tabler::forms.selectgroup>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">View Mode (With Icons)</label>
                            <x-tabler::forms.selectgroup>
                                <x-tabler::forms.selectgroup-item name="view" value="grid" icon="layout-grid"
                                    text="Grid" checked />
                                <x-tabler::forms.selectgroup-item name="view" value="list" icon="list"
                                    text="List" />
                                <x-tabler::forms.selectgroup-item name="view" value="kanban" icon="layout-kanban"
                                    text="Kanban" />
                            </x-tabler::forms.selectgroup>

                            <label class="form-label">Features (Multiple Selection)</label>
                            <x-tabler::forms.selectgroup>
                                <x-tabler::forms.selectgroup-item name="features[]" value="wifi" text="WiFi"
                                    type="checkbox" checked />
                                <x-tabler::forms.selectgroup-item name="features[]" value="parking" text="Parking"
                                    type="checkbox" />
                                <x-tabler::forms.selectgroup-item name="features[]" value="pool" text="Pool"
                                    type="checkbox" checked />
                            </x-tabler::forms.selectgroup>
                        </div>
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::forms.selectgroup&gt;
    &lt;x-tabler::forms.selectgroup-item name="plan" value="free" text="Free" checked /&gt;
    &lt;x-tabler::forms.selectgroup-item name="plan" value="pro" text="Pro" /&gt;
&lt;/x-tabler::forms.selectgroup&gt;

{{-- Pills style --}}
&lt;x-tabler::forms.selectgroup class="form-selectgroup-pills"&gt;
    &lt;x-tabler::forms.selectgroup-item name="size" value="md" text="Medium" /&gt;
&lt;/x-tabler::forms.selectgroup&gt;

{{-- With icons --}}
&lt;x-tabler::forms.selectgroup-item name="view" value="grid" icon="layout-grid" text="Grid" /&gt;

{{-- Multiple selection (checkboxes) --}}
&lt;x-tabler::forms.selectgroup-item name="features[]" value="wifi" text="WiFi" type="checkbox" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Validation States --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Validation States</x-slot:title>
                    <x-slot:subtitle>Valid and invalid input states</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="mb-3">
                        <label class="form-label">Valid Input</label>
                        <input type="text" class="form-control is-valid" value="user@example.com" />
                        <div class="valid-feedback d-block">Looks good!</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Invalid Input</label>
                        <input type="text" class="form-control is-invalid" value="invalid-email" />
                        <div class="invalid-feedback d-block">Please provide a valid email address.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Invalid Select</label>
                        <select class="form-select is-invalid">
                            <option value="">Choose...</option>
                        </select>
                        <div class="invalid-feedback d-block">Please select an option.</div>
                    </div>

                    <label class="form-check is-invalid">
                        <input type="checkbox" class="form-check-input is-invalid">
                        <span class="form-check-label">Invalid Checkbox</span>
                    </label>
                    <div class="invalid-feedback d-block">You must agree before submitting.</div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;input class="form-control is-valid" /&gt;
&lt;div class="valid-feedback d-block"&gt;Looks good!&lt;/div&gt;

&lt;input class="form-control is-invalid" /&gt;
&lt;div class="invalid-feedback d-block"&gt;Error message&lt;/div&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Complete Form Example --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Complete Form Example</x-slot:title>
                    <x-slot:subtitle>Real-world form with multiple field types</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <form>
                        <x-tabler::forms.input name="full_name" label="Full Name" placeholder="John Doe" required />

                        <x-tabler::forms.input name="user_email" label="Email" type="email" icon="mail"
                            placeholder="john@example.com" required />

                        <x-tabler::forms.select name="department" label="Department" placeholder="Select department..."
                            :options="[
                                'sales' => 'Sales',
                                'marketing' => 'Marketing',
                                'engineering' => 'Engineering',
                                'support' => 'Support',
                            ]" required />

                        <x-tabler::forms.textarea name="message" label="Message" placeholder="Enter your message..."
                            :rows="4" required />

                        <x-tabler::forms.checkbox name="subscribe_form" label="Send me updates and newsletters" />

                        <x-tabler::forms.checkbox name="terms_form" label="I agree to the terms and conditions"
                            required />

                        <div class="mt-3">
                            <x-tabler::button type="submit" color="primary">Submit Form</x-tabler::button>
                            <x-tabler::button type="button" class="ms-2">Cancel</x-tabler::button>
                        </div>
                    </form>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;form&gt;
    &lt;x-tabler::forms.input name="name" label="Name" required /&gt;
    &lt;x-tabler::forms.input name="email" type="email" required /&gt;
    &lt;x-tabler::forms.select name="dept" :options="[...]" /&gt;
    &lt;x-tabler::forms.textarea name="message" /&gt;
    &lt;x-tabler::forms.checkbox name="terms" required /&gt;
    &lt;x-tabler::button type="submit"&gt;Submit&lt;/x-tabler::button&gt;
&lt;/form&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Props Reference: Input Component --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Props Reference: Input Component</x-slot:title>
                    <x-slot:subtitle>Complete list of available props for
                        <code>&lt;x-tabler::forms.input&gt;</code></x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="table-responsive">
                        <table class="table-vcenter table">
                            <thead>
                                <tr>
                                    <th>Prop</th>
                                    <th>Type</th>
                                    <th>Default</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>type</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>'text'</code></td>
                                    <td>Input type: text, email, password, number, tel, url, etc.</td>
                                </tr>
                                <tr>
                                    <td><code>name</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Input name attribute</td>
                                </tr>
                                <tr>
                                    <td><code>id</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Input ID (auto-generated from name if not provided)</td>
                                </tr>
                                <tr>
                                    <td><code>value</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Input value</td>
                                </tr>
                                <tr>
                                    <td><code>placeholder</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Placeholder text</td>
                                </tr>
                                <tr>
                                    <td><code>label</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Label text displayed above input</td>
                                </tr>
                                <tr>
                                    <td><code>help</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Help text displayed above input</td>
                                </tr>
                                <tr>
                                    <td><code>error</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Error message (overrides Laravel validation errors)</td>
                                </tr>
                                <tr>
                                    <td><code>required</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Mark as required field (adds asterisk to label)</td>
                                </tr>
                                <tr>
                                    <td><code>disabled</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Disable input</td>
                                </tr>
                                <tr>
                                    <td><code>readonly</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Make input read-only</td>
                                </tr>
                                <tr>
                                    <td><code>size</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Size variant: 'sm', 'lg'</td>
                                </tr>
                                <tr>
                                    <td><code>icon</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Tabler icon name (without 'tabler-' prefix)</td>
                                </tr>
                                <tr>
                                    <td><code>iconPosition</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>'end'</code></td>
                                    <td>Icon position: 'start', 'end'</td>
                                </tr>
                                <tr>
                                    <td><code>loading</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Show loading spinner instead of icon</td>
                                </tr>
                                <tr>
                                    <td><code>wrapper</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>true</code></td>
                                    <td>Wrap in mb-3 div for consistent spacing</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Similar Props for Other Form Components</h4>
                        <ul class="text-secondary">
                            <li><strong>Textarea:</strong> Similar to input, adds <code>rows</code> (int,
                                default 3) and <code>autosize</code> (bool) props
                            </li>
                            <li><strong>Select:</strong> Similar to input, adds <code>options</code> (array),
                                <code>multiple</code> (bool), and <code>size</code> (int for visible options)
                                props
                            </li>
                            <li><strong>Checkbox/Radio/Switch:</strong> Uses <code>checked</code> (bool) instead
                                of value, adds <code>help</code> for description text
                            </li>
                            <li><strong>Input Group:</strong> Only <code>prepend</code> and <code>append</code>
                                props for addon text
                            </li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h4>Usage Notes</h4>
                        <ul class="text-secondary">
                            <li>Icons use the <code>secondnetwork/blade-tabler-icons</code> package</li>
                            <li>Icon names should be provided without the 'tabler-' prefix (e.g.,
                                <code>icon="search"</code>)
                            </li>
                            <li>When <code>name</code> is set, component automatically handles
                                <code>old()</code> values for form repopulation
                            </li>
                            <li>Validation errors are automatically displayed when using Laravel's validation
                            </li>
                            <li>The <code>wrapper</code> prop controls whether the component is wrapped in a
                                <code>mb-3</code> div
                            </li>
                            <li>Set <code>wrapper="false"</code> for inline forms or custom layouts</li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Available CSS Classes --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Available CSS Classes</x-slot:title>
                    <x-slot:subtitle>Additional styling options via class attribute</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p class="text-secondary">You can use these classes via the <code>class=""</code> attribute
                        for additional styling:</p>

                    <div class="mt-4">
                        <h4>Input & Textarea Classes</h4>
                        <div class="table-responsive">
                            <table class="table-vcenter table">
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>form-control-light</code></td>
                                        <td>Light background variant for inputs</td>
                                    </tr>
                                    <tr>
                                        <td><code>form-control-dark</code></td>
                                        <td>Dark background variant for inputs</td>
                                    </tr>
                                    <tr>
                                        <td><code>form-control-rounded</code></td>
                                        <td>Rounded corners for inputs</td>
                                    </tr>
                                    <tr>
                                        <td><code>form-control-flush</code></td>
                                        <td>Remove background and borders</td>
                                    </tr>
                                    <tr>
                                        <td><code>form-control-sm</code></td>
                                        <td>Small input (also available via size prop)</td>
                                    </tr>
                                    <tr>
                                        <td><code>form-control-lg</code></td>
                                        <td>Large input (also available via size prop)</td>
                                    </tr>
                                    <tr>
                                        <td><code>is-valid</code></td>
                                        <td>Show valid state (green border)</td>
                                    </tr>
                                    <tr>
                                        <td><code>is-invalid</code></td>
                                        <td>Show invalid state (red border)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>Checkbox, Radio & Switch Classes</h4>
                        <div class="table-responsive">
                            <table class="table-vcenter table">
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>form-check-inline</code></td>
                                        <td>Display inline instead of block</td>
                                    </tr>
                                    <tr>
                                        <td><code>form-check-reverse</code></td>
                                        <td>Align checkbox/radio/switch to the right</td>
                                    </tr>
                                    <tr>
                                        <td><code>form-check-lg</code></td>
                                        <td>Large checkbox/radio/switch</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>Select Classes</h4>
                        <div class="table-responsive">
                            <table class="table-vcenter table">
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>form-select-sm</code></td>
                                        <td>Small select dropdown</td>
                                    </tr>
                                    <tr>
                                        <td><code>form-select-lg</code></td>
                                        <td>Large select dropdown</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>Input Group Classes</h4>
                        <div class="table-responsive">
                            <table class="table-vcenter table">
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>input-group-flat</code></td>
                                        <td>Remove border radius from inner elements</td>
                                    </tr>
                                    <tr>
                                        <td><code>input-group-sm</code></td>
                                        <td>Small input group</td>
                                    </tr>
                                    <tr>
                                        <td><code>input-group-lg</code></td>
                                        <td>Large input group</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>Select Group Classes</h4>
                        <div class="table-responsive">
                            <table class="table-vcenter table">
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>form-selectgroup-pills</code></td>
                                        <td>Pill-shaped buttons with spacing</td>
                                    </tr>
                                    <tr>
                                        <td><code>form-selectgroup-boxes</code></td>
                                        <td>Box-style buttons with borders</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>Width Utilities</h4>
                        <ul class="text-secondary">
                            <li><code>w-auto</code>, <code>w-25</code>, <code>w-50</code>, <code>w-75</code>,
                                <code>w-100</code> - Width percentages for form controls
                            </li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h4>Spacing Utilities</h4>
                        <ul class="text-secondary">
                            <li><code>mb-2</code>, <code>mb-3</code>, <code>mt-2</code>, <code>mt-3</code> -
                                Margin utilities for custom spacing
                            </li>
                            <li><code>me-2</code>, <code>ms-2</code> - Margin end/start for inline elements</li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

    </div>
@endsection
