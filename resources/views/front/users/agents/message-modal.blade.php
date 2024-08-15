<!-- Share Modal -->
<div id="messageModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeMessageModal()">&times;</span>
        <h2>Message {{ $propertyProfessional->firstname }}
            {{ $propertyProfessional->lastname }}</h2>
        <div class="modal-form">
            <form class="d-inline" method="POST" enctype="multipart/form-data"
                action="{{ route('user.professional.message', ['profID' => $propertyProfessional->id]) }}">
                @csrf
                <div class="row col-lg-12">
                    @auth
                        <div class="col-lg-12 mb-2 mt-2">
                            <input type="text" name="name" placeholder="Your name"
                                value="{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}"
                                class="form-input form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="col-lg-12 mb-2">
                            <input type="email" name="email" value="{{ auth()->user()->email }}"
                                placeholder="Your Email"
                                class="form-input form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="col-lg-12 mb-2">
                            <input type="text" name="phone" value="{{ auth()->user()->phone }}"
                                placeholder="Your Phone number"
                                class="form-input form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                    @else
                        <div class="col-lg-12 mb-2 mt-2">
                            <input type="text" name="name" placeholder="Your name"
                                class="form-input form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="col-lg-12 mb-2">
                            <input type="email" name="email" placeholder="Your Email"
                                class="form-input form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="col-lg-12 mb-2">
                            <input type="text" name="phone" placeholder="Your Phone number"
                                class="form-input form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                    @endauth

                    <div class="col-lg-12 mb-4">
                        <textarea type="text" name="message" value="I am interested in buying..." rows="3"
                            class="form-input form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            
                        </textarea>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-success form-control "
                            style="background-color: #394293;cursor: pointer;">
                            <strong>
                                {{ __('Send Message') }}
                            </strong>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<style>
    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fff;
        margin: 10% auto;
        padding: 20px;
        border-radius: 8px;
        width: 90%;
        max-width: 500px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Close button styles */
    .close {
        color: #aaa;
        float: right;
        font-size: 24px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    /* Social links container */
    .modal-form {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
        margin-top: 20px;
    }
</style>

<script>
    function showMessageModal(event) {
        event.preventDefault();
        document.getElementById('messageModal').style.display = 'block';
    }

    function closeMessageModal() {
        document.getElementById('messageModal').style.display = 'none';
    }
</script>
