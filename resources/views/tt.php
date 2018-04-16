    <div class="row">


                        <input type="hidden" name="driverRegNo" value="{{$details['driverRegNo']}}"/>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Vehicle Involve </label>

                                <select class="select2 select2-hidden-accessible vehicles" name="vehicleRegNo"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select---</option>

                                </select>                                    
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Trip Type </label>
                                <select class="select2 select2-hidden-accessible tviTypes" name="tripTypeId"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select---</option>

                                </select>    
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Regime</label>

                                <select class="select2 select2-hidden-accessible regimes" name="regimeId"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select---</option>

                                </select>  

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Customs Office</label>


                                <select class="select2 select2-hidden-accessible offices" name="customsOfficeCode"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select---</option>

                                </select>  

                            </div>
                        </div>



                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Trade Ref No </label>

                                <input type="text" name="tradeRefNo" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Country of Consignment </label>
                                <select class="select2 select2-hidden-accessible countries" name="consCountryCode"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select ---</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Last Country</label>
                                <select class="select2 select2-hidden-accessible countries" name="lastCountryCode"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select ---</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Next Country</label>
                                <select class="select2 select2-hidden-accessible countries" name="nextCountryCode"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select ---</option>

                                </select>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Final Country</label>
                                <select class="select2 select2-hidden-accessible countries" name="finalCountryCode"  tabindex="-1" aria-hidden="true" required>

                                    <option value="">Select ---</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Entry Office</label>

                                <input type="text" name="entryOfficeCode" class="form-control">
                            </div>
                        </div><div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Exit Office</label>

                                <input type="text" name="exitOfficeCode" class="form-control">
                            </div>
                        </div><div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Car NetNo</label>

                                <input type="text" name="carnetNo" class="form-control">
                            </div>
                        </div><div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Check In</label>

                                <input type="text" name="checkInDate" data-dateformat="dd-mm-yy" class="form-control datepicker">
                            </div>
                        </div><div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Stay Duration</label>

                                <input type="text" name="stayDuration" class="form-control">
                            </div>
                        </div><div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Import Duration</label>

                                <input type="text" name="importDuration" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Permit Expiry Date</label>

                                <input type="text" name="permExpiryDate" data-dateformat="dd-mm-yy" class="form-control datepicker">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Purpose</label>

                                <input type="text" name="purpose" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">Remarks</label>

                                <input type="text" name="remarks" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">CheckIn By</label>

                                <input type="text" name="checkInBy" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class=" control-label">CheckIn On</label>

                                <input type="text" name="checkInOn" data-dateformat="dd-mm-yy" class="form-control datepicker">
                            </div>
                        </div>



                    </div>
