<div class="pd-20 card-box height-100-p">
    <div class="profile-photo">
        <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
        <img src="{{asset('assets/vendors/images/photo1.jpg')}}" alt="" class="avatar-photo">
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body pd-5">
                    
                        <div class="img-container">
                            <img id="image" src="" alt="Picture">
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <input type="submit" value="Update" class="btn btn-primary">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
                        {{-- ####################################################################################
                        %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
                        ************************************************************************************* --}}
    <div class="">
    
        {{-- <div class="modal-body pd-5">
            <div class="img-container">
                <img src="{{asset('assets/vendors/images/img3.jpg')}}" class="avatar-photo" id="" alt="Picture">
            </div>
        </div> --}}
    
    <div class="" id="actions">
        <div class="col-sm-12 col-md-12 col-lg-9 docs-buttons">
            <!-- <h3>Toolbar:</h3> -->
            
    
            <div class="btn-group">
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <span class="docs-tooltip">
                        Close
                    </span>
                </button>

                <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(0.1)">
                        <span class="fa fa-search-plus"></span>
                    </span>
                </button>
                <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(-0.1)">
                        <span class="fa fa-search-minus"></span>
                    </span>
                </button>
                <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotate(-45)">
                        <span class="fa fa-rotate-left"></span>
                    </span>
                </button>
            
                <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.reset()">
                        <span class="fa fa-refresh"></span>
                    </span>
                </button>
                <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                    <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                    <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
                        <span class="fa fa-upload"></span>
                    </span>
                </label>
                
            </div>
    
            
    
            <!-- Show the cropped image in modal -->
            <div class="modal fade docs-cropped" id="getCroppedCanvasModal" role="dialog" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal -->
    
            
            
            
            
        </div><!-- /.docs-buttons -->
    
        <div class="col-sm-12 col-md-12 col-lg-3 docs-toggles">
            <!-- <h3>Toggles:</h3> -->
            
    
            
    
            <div class="dropdown dropup docs-options">
                {{-- <button type="button" class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
                    Toggle Options
                    <span class="caret"></span>
                </button> --}}
                <ul class="dropdown-menu" role="menu" aria-labelledby="toggleOptions">
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="responsive" type="checkbox" name="responsive" checked>
                            <label class="form-check-label" for="responsive">responsive</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="restore" type="checkbox" name="restore" checked>
                            <label class="form-check-label" for="restore">restore</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="checkCrossOrigin" type="checkbox" name="checkCrossOrigin" checked>
                            <label class="form-check-label" for="checkCrossOrigin">checkCrossOrigin</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="checkOrientation" type="checkbox" name="checkOrientation" checked>
                            <label class="form-check-label" for="checkOrientation">checkOrientation</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="modal" type="checkbox" name="modal" checked>
                            <label class="form-check-label" for="modal">modal</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="guides" type="checkbox" name="guides" checked>
                            <label class="form-check-label" for="guides">guides</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="center" type="checkbox" name="center" checked>
                            <label class="form-check-label" for="center">center</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="highlight" type="checkbox" name="highlight" checked>
                            <label class="form-check-label" for="highlight">highlight</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="background" type="checkbox" name="background" checked>
                            <label class="form-check-label" for="background">background</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="autoCrop" type="checkbox" name="autoCrop" checked>
                            <label class="form-check-label" for="autoCrop">autoCrop</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="movable" type="checkbox" name="movable" checked>
                            <label class="form-check-label" for="movable">movable</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="rotatable" type="checkbox" name="rotatable" checked>
                            <label class="form-check-label" for="rotatable">rotatable</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="scalable" type="checkbox" name="scalable" checked>
                            <label class="form-check-label" for="scalable">scalable</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="zoomable" type="checkbox" name="zoomable" checked>
                            <label class="form-check-label" for="zoomable">zoomable</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="zoomOnTouch" type="checkbox" name="zoomOnTouch" checked>
                            <label class="form-check-label" for="zoomOnTouch">zoomOnTouch</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="zoomOnWheel" type="checkbox" name="zoomOnWheel" checked>
                            <label class="form-check-label" for="zoomOnWheel">zoomOnWheel</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="cropBoxMovable" type="checkbox" name="cropBoxMovable" checked>
                            <label class="form-check-label" for="cropBoxMovable">cropBoxMovable</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="cropBoxResizable" type="checkbox" name="cropBoxResizable" checked>
                            <label class="form-check-label" for="cropBoxResizable">cropBoxResizable</label>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="toggleDragModeOnDblclick" type="checkbox" name="toggleDragModeOnDblclick" checked>
                            <label class="form-check-label" for="toggleDragModeOnDblclick">toggleDragModeOnDblclick</label>
                        </div>
                    </li>
                </ul>
            </div><!-- /.dropdown -->
    
        </div><!-- /.docs-toggles -->
    </div>
    </div>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>