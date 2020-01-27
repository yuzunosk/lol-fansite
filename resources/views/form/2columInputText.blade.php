                            <label for={{ $text }} class="col-xl-2 col-md-4 col-form-label" style="margin-bottom: 10px;">
                            {{ __($text) }}
                            </label>

                            <div class="col-xl-4 col-md-6">
                                <input id={{ $text }}
                                 type="text" class="form-control @error('text') is-invalid @enderror"
                                name="{{ $text }}"
                                value="{{ old('$text') }}" required
                                autocomplete={{$text}} autofocus>

                                @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
