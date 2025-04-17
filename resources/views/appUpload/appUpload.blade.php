  
  
  <title>App Upload Form</title>
    

    

<!-- Quill CSS -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">




    <div class="container mt-5">
        <h2 class="mb-4">Upload Your App</h2>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('launchpad') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">App Icon</label>
                <input type="file" class="form-control" name="app_icon" accept="image/*">
            </div>


            <div class="mb-3">
                <label class="form-label">App Name</label>
                <input type="text" class="form-control" name="app_name" placeholder="Enter App Name">
            </div>

            <div class="mb-3">
                <label class="form-label">App Category</label>
                <select class="form-control" name="app_category">
                    <option disabled selected>Select a category</option>
                    <option value="AI Driven">AI Driven</option>
                    <option value="Airdrop">Airdrop</option>
                    <option value="Arbitrage">Arbitrage</option>
                    <option value="Audit">Audit</option>
                    <option value="Browser">Browser</option>
                    <option value="DAO">DAO</option>
                    <option value="Defi">Defi</option>
                    <option value="DEX">DEX</option>
                    <option value="DIA">DIA</option>
                    <option value="Exchange">Exchange</option>
                    <option value="GameFi">GameFi</option>
                    <option value="Launchpad">Launchpad</option>
                    <option value="Marketplace">Marketplace</option>
                    <option value="Metaverse">Metaverse</option>
                    <option value="NFT">NFT</option>
                    <option value="Play-to-Earn">Play-to-Earn</option>
                    <option value="Research & Analysis">Research & Analysis</option>
                    <option value="Staking">Staking</option>
                    <option value="Swapping">Swapping</option>
                    <option value="Token">Token</option>
                    <option value="Trading">Trading</option>
                    <option value="Use to Earn">Use to Earn</option>
                    <option value="Utilities">Utilities</option>
                    <option value="Wallet">Wallet</option>
                </select>
            </div>

            {{-- social media --}}

            <div class="mb-3">
                <label class="form-label">Website URL</label>
                <input type="url" class="form-control" name="website_url" placeholder="https://www.yourwebsite.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Instagram URL</label>
                <input type="url" class="form-control" name="instagram_url"
                    placeholder="https://instagram.com/yourhandle">
            </div>
            <div class="mb-3">
                <label class="form-label">Facebook URL</label>
                <input type="url" class="form-control" name="facebook_url"
                    placeholder="https://www.facebook.com/yourhandle">
            </div>
            <div class="mb-3">
                <label class="form-label">X (Twitter) URL</label>
                <input type="url" class="form-control" name="x_url" placeholder="https://www.x.com/yourhandle">
            </div>


            <div class="mb-3">
                <label class="form-label">App Images</label>
                <input type="file" class="form-control" name="app_images[]" multiple accept="image/*">
                <small class="text-muted">You can upload multiple images.</small>
            </div>
            
            <!-- About Section with Tabs -->
            <div class="mb-3">
                <label class="form-label">About Info</label>
                
                <!-- Tabs Navigation -->
                <ul class="nav nav-tabs" id="aboutTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="intro-tab" data-bs-toggle="tab" data-bs-target="#introduction" type="button" role="tab">Introduction</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab">Overview</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="features-tab" data-bs-toggle="tab" data-bs-target="#features" type="button" role="tab">Key Features</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="start-tab" data-bs-toggle="tab" data-bs-target="#get-started" type="button" role="tab">How to Get Started</button>
                    </li>
                </ul>

                <!-- Tabs Content -->
                <div class="tab-content p-3 border" id="aboutTabsContent">
                    <div class="tab-pane fade show active" id="introduction" role="tabpanel">
                        <textarea name="about_intro" class="form-control" rows="8" placeholder="Write introduction..."></textarea>
                    </div>
                    <div class="tab-pane fade" id="overview" role="tabpanel">
                        <textarea name="about_overview" class="form-control" rows="8" placeholder="Write overview..."></textarea>
                    </div>
                    <div class="tab-pane fade" id="features" role="tabpanel">
                        <textarea name="about_features" class="form-control" rows="8" placeholder="List key features..."></textarea>
                    </div>
                    <div class="tab-pane fade" id="get-started" role="tabpanel">
                        <textarea name="about_get_started" class="form-control" rows="8" placeholder="Explain how to get started..."></textarea>
                    </div>
                </div>
            </div>


            
            {{-- Tag section  --}}
            <div class="mb-3">
                <label class="form-label">Tags</label>
                <input type="text" class="form-control" id="app_tags" name="app_tags"
                    placeholder="Enter tags separated by commas">
                <small class="text-muted">Example: social, productivity, AI</small>
            </div>



        {{-- SEO section --}}
            <div class="card mb-4">
                <div class=" bg-primary text-white">
                    <h4 class="mb-0">SEO Details</h4>
                </div>
            </div>
         
            <div class="mb-3">
                <label class="form-label">SEO Title</label>
                <input type="text" class="form-control" name="seo_title" placeholder="Enter SEO title for your app">
                <small class="text-muted">Recommended: 50-60 characters</small>
            </div>
            
            <div class="mb-3">
                <label class="form-label">SEO Description</label>
                <textarea class="form-control" name="seo_description" rows="3" placeholder="Write an SEO-friendly description"></textarea>
                <small class="text-muted">Recommended: 150-160 characters</small>
            </div>
            
            <div class="mb-3">
                <label class="form-label">SEO Keywords</label>
                <input type="text" class="form-control" name="seo_keywords" placeholder="Enter keywords separated by commas">
                <small class="text-muted">Example: app, AI, finance, blockchain</small>
            </div>
            
        



            <div class="mb-3">
                <label class="form-label">FAQ</label>
                <div id="faq-container"></div>
                <button type="button" class="btn btn-primary mt-2" onclick="addFAQ()">Add FAQ</button>
            </div>



            

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="btn btn-success">Submit</button>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </form>
    </div>

    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            let errors = [];

            // App Name Validation
            let appName = document.querySelector("[name='app_name']").value.trim();
            if (!/^[a-zA-Z0-9\s]+$/.test(appName)) {
                errors.push("App Name should only contain letters, numbers, and spaces.");
            }

            // App Icon Validation
            let appIcon = document.querySelector("[name='app_icon']").files[0];
            if (!appIcon) {
                errors.push("App Icon is required.");
            } else {
                let allowedTypes = ["image/jpeg", "image/png", "image/jpg", "image/webp"];
                if (!allowedTypes.includes(appIcon.type)) {
                    errors.push("App Icon must be a valid image file (JPEG, PNG, WebP).");
                }
                if (appIcon.size > 2048 * 1024) {
                    errors.push("App Icon must be less than 2MB.");
                }
            }

            // About Introduction Validation
            // let aboutIntro = document.querySelector("[name='about_intro']").value.trim();
            // if (aboutIntro.length < 10 || aboutIntro.length > 500) {
            //     errors.push("Introduction must be between 10 and 500 characters.");
            // }

            // Tags Validation
            // let tags = document.querySelector("[name='app_tags[]']").value.trim();
            // if (tags && !/^[a-zA-Z0-9\s,]+$/.test(tags)) {
            //     errors.push("Tags should only contain letters, numbers, and commas.");
            // }


            // Prevent Submission if Errors Exist
            if (errors.length > 0) {
                event.preventDefault();
                alert("Please fix the following errors:\n" + errors.join("\n"));
            }


            
        });

    </script>



<script>
    function addFAQ() {
        let faqContainer = document.getElementById("faq-container");
        let index = faqContainer.children.length + 1;
        let faqHtml = `
            <div class="faq-item mb-3 border p-3">
                <label class="form-label">Question ${index}</label>
                <input type="text" class="form-control" name="faq_question[]" placeholder="Enter Question">
                <label class="form-label mt-2">Answer</label>
                <textarea class="form-control" name="faq_answer[]" rows="2" placeholder="Enter Answer"></textarea>
                <button type="button" class="btn btn-danger btn-sm mt-2" onclick="removeFAQ(this)">Remove</button>
            </div>`;
        faqContainer.insertAdjacentHTML('beforeend', faqHtml);
    }

    function removeFAQ(button) {
        button.parentElement.remove();
    }
</script>
<script>
const editors = [
    { id: 'introduction' },
    { id: 'overview' },
    { id: 'features' },
    { id: 'get-started' }
];

editors.forEach(({ id }) => {
    const quill = new Quill(`#editor-${id}`, {
        theme: 'snow',
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline'],
                ['link'],
                [{ list: 'ordered' }, { list: 'bullet' }],
                ['blockquote']
            ]
        }
    });

    const textarea = document.getElementById(`textarea-${id}`);

    // Update hidden textarea when content changes
    quill.on('text-change', function () {
        textarea.value = quill.root.innerHTML;
    });
});


</script>


<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
