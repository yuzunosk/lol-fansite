                        <div class="form-group row">
                            <label for={{ $text }} class="col-md-4 col-form-label">{{ __($text) }}</label>

                            <div class="col-md-8">
                                <input id={{  $text  }}
                                 type="text" class="form-control @error($text) is-invalid @enderror"
                                name="{{ $text }}"
                                value="{{ old('$text') }}" required
                                autocomplete={{ $text }} autofocus>

                                @error($text)
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>