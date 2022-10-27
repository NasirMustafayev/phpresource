                        <div class="tab-pane fade" id="Profile">
                            <h3 class="title-section">Public Profile</h3>
                            <div class="public-profile inner-page-padding"> 
                                <div class="public-profile-item"> 
                                    <div class="public-profile-title"> 
                                        <h4>Avatar</h4>
                                    </div>
                                    <div class="public-profile-content"> 
                                        <img class="img-responsive" src="<?php echo $showuser['user_picture']; ?>" alt="Avatar" style="width: 80px;height: 80px">
                                        <div class="file-title">Upload a new avatar:</div>
                                        <div class="file-upload-area"><a href="#">Choose File</a>No File Choosen</div>
                                        <div class="file-size">JPEG 80x80px</div>
                                    </div>
                                </div> 
                                <div class="public-profile-item"> 
                                    <div class="public-profile-title"> 
                                        <h4>Banner Image</h4>
                                    </div>
                                    <div class="public-profile-content"> 
                                        <img class="img-responsive" src="img\profile\banner.jpg" alt="Avatar">
                                        <div class="file-title">Upload a new homepage image:</div>
                                        <div class="file-upload-area"><a href="#">Choose File</a>No File Choosen</div>
                                        <div class="file-size">JPEG 590x242</div>
                                    </div>
                                </div> 
                                <div class="public-profile-item"> 
                                    <div class="public-profile-title"> 
                                        <h4>Show Your Country Name on Your Profile</h4>
                                    </div>
                                    <div class="public-profile-content"> 
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                            <label for="inlineRadio1"> Yes</label>
                                        </div>
                                        <div class="radio radio-inline">
                                            <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                            <label for="inlineRadio2"> No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="public-profile-item"> 
                                    <div class="public-profile-title"> 
                                        <h4>Profile Heading</h4>
                                    </div>
                                    <div class="public-profile-content"> 
                                        <input class="profile-heading" type="text" value="">
                                        <div class="file-size">Appears on your profile page</div>
                                    </div>
                                </div>
                                <div class="public-profile-item"> 
                                    <div class="public-profile-title"> 
                                        <h4>Profile Text</h4>
                                    </div>
                                    <div class="public-profile-content"> 
                                        <textarea class="profile-heading" rows="5"></textarea>
                                        <div class="file-size">Here's a refresher on how to add some HTML magic to your comment.</div>
                                        <ul class="html-format">
                                            <li>&lt;strong&gt;&lt;/strong&gt; to make things bold</li>
                                            <li>&lt;em&gt;&lt;/em&gt; to emphasize</li>
                                            <li>&lt;ul&gt;&lt;li&gt; or &lt;ol&gt;&lt;li&gt; to make lists</li>
                                            <li>&lt;h3&gt; or &lt;h4&gt; to make headings</li>
                                            <li>&lt;pre&gt;&lt;/pre&gt; for code blocks</li>
                                            <li>&lt;code&gt;&lt;/code&gt; for a few words of code</li>
                                            <li>&lt;a&gt;&lt;/a&gt; for links</li>
                                            <li>&lt;img&gt; to paste in an image (it'll need to be hosted somewhere else though)</li>
                                            <li>&lt;blockquote&gt;&lt;/blockquote&gt; to quote somebody</li>
                                        </ul>
                                        <a href="#" class="update-btn" id="save">Save</a>
                                    </div>
                                </div>
                            </div> 
                        </div> 