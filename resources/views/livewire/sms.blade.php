<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="card">

        <div class="row m-5">

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="campaign_type">*Campaign Type</label>
                            <select name="campaign_type" id="campaign_type" class="form-select form-select-lg mb-3" wire:model='campaign_type'>
                                <option value="Single SMS">Single SMS</option>
                                <option value="Group SMS">Group SMS</option>     
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="message_type">*Message Type</label>
                        <select name="message_type" id="message_type" class="form-select form-select-lg mb-3" wire:model='message_type'>
                            <option value="sms">SMS</option>
                            <option value="flash">Flash</option>      
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    
                    <div class="row">
                        <div class="col-md-6">
                         <div class="form-group">
                             <label for="sender_id"> *Sender Name </label>
                             <select name="sender_id" id="sender_id" class="form-select form-select-lg mb-3" wire:model="sender_name">
                                 <option value="">Select Sender</option> 
                             </select>    
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recipient"> *Recipient(s) </label>
                                <select name="recipient" id="recipient" class="form-select form-select-lg mb-3" wire:model="recipient">
                                    <option value="">Select Recipient</option> 
                                @foreach ($recipients as $item)
                                    <option value="{{$item->mobile_number}}"> {{$item->mobile_number}} </option>
                                @endforeach
                                </select>    

                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col-md-12">


                        <div class="form-group" x-data="{

                            message:@entangle('message'),
                            limit: $el.dataset.limit,
                            
                            get remaining() {
                                
                                return this.message.length;

                            },

                            get pages(){

                                if(remaining >  640){

                                    return 3+'+';
                                }

                                if(remaining > 320 && remaining <= 640){

                                    return 3;
                                }

                                if (remaining > 160 && remaining <= 320){
                                    return 2;
                                }
                                if (remaining <=160){
                                    return 1;
                                }
                            }

                        }" data-limit="160">
                            <label for="message">*Message</label>
                            {{-- <input type="text" name="message" id="message" placeholder="message"> --}}
                            <textarea name="message" id="message" cols="30" rows="4" class="form-control" placeholder="Message" style="font-size:20px" wire:model='message' wire.ignore.self></textarea>

                            {{-- <input type="hidden" name="" x-model="message"> --}}

                            <p id="remaining" class="mt-2">
                                You have <span x-text="remaining"></span> characters / <span x-text="pages"></span> SMS pages
                            </p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button class="btn-lg btn-primary" wire:click='sendMessage'>Send</button>
                    </div>
                </div>
                
            </div>
            <style>
                                .chat {
                width: 100%;
                /* border: solid 1px #EEE; */
                display: flex;
                flex-direction: column;
                padding: 5px;
                }

                .messages {
                margin-top: 30px;
                display: flex;
                flex-direction: column;
                }

                .message {
                border-radius: 20px;
                padding: 8px 15px;
                margin-top: 5px;
                margin-bottom: 5px;
                display: inline-block;
                }

                .yours {
                align-items: flex-start;
                }

                .yours .message {
                margin-right: 25%;
                background-color: #eee;
                position: relative;
                }

            </style>
         
            <div class="col-md-6 pl-5 device-wrapper">
                <div class="device device-iphone-x">
                    <div class="device-frame">
                      <div class="device-content"> 
                        <div class='text-center p-5'>
                           <p class="p-0 m-0" style="margin-bottom:-10"> Message Body Preview</p> 
                           @if ($message)
                               
                            <div class="chat">

                                <div class="yours messages">
                                    <div class="message">
                                        {{$message}}
                                    </div>
                                </div>
                            </div>
                           @endif
                        </div>
                     </div>
                    </div>
                    <div class="device-stripe"></div>
                    <div class="device-header"></div>
                    <div class="device-sensors"></div>
                    <div class="device-btns"></div>
                    <div class="device-power"></div>
                    <div class="device-home"></div>
                  </div>
        </div>






</div>
