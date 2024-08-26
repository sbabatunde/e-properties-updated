<div class="post-form modal fade" id="messageDetails{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="messageDetails{{ $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top:20vh">
        <div class="modal-content" style="background:#ececee;">
            <div class="modal-header w-full">
                <div class="create-post">Message Details</div>
                <div class="post-close">
                    <button type="button" class="btn-close pl-2 pr-2 pt-1 pb-1" data-bs-dismiss="modal"
                        aria-label="Close">
                        <div><strong>X</strong></div>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <div class="col-md-12 post-form-custom row">
                    <div class="col-md-12">
                        <p>
                            **Sent On** : {{ $item->created_at->format('D, M j,Y. gi:a') }}
                        </p>

                        <p>
                            **Sender** : {{ $item->client->firstname }} {{ $item->client->lastname }}
                        </p>
                        <p>
                            **Email** : {{ $item->client->email }}
                        </p>
                        <p>
                            **Contact** : {{ $item->client->phone }}
                        </p>
                        @if ($item->property !== null)
                            <p>
                                **Property** : {{ $item->property->title }}
                            </p>
                            <p>
                                **Property Code** : {{ $item->property->property_code }}
                            </p>
                        @endif



                    </div>
                    <div class="col-md-12">
                        <p>
                            <u>Message Details</u><br>
                            {{ $item->message }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        p {
            /* font: 200; */
            font-size: 3vmin;
            color: black
                /* font-weight: 500 */
        }
    </style>
