                            <label 
                            for={{ $text }}
                            class="col-md-10 col-8 col-form-label" style="margin-bottom: 5px;"
                            >
                                {{ __($text) }}
                            </label>
                            <div class="col-md-2 col-4">
                                <input id={{  $text  }}
                                 type="number" class="text-center border-0 bg-secondary text-light form-control @error($text) is-invalid @enderror"
                                name="{{ $text }}"
                                value="{{ old('$text') }}" required
                                max=10
                                min=1
                                autocomplete={{ $text }} autofocus>

                                @error($text)
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>