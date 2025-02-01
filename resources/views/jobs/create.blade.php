<x-layout>
    <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
        <h2 class="text-4xl text-center font-bold mb-4">
            Create Job Listing
        </h2>
        <form method="POST" action="/jobs" enctype="multipart/form-data">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Job Info
            </h2>

            <div class="mb-4">
                <label class="block text-gray-700" for="title">Job Title</label>
                <input id="title" type="text" name="title"
                    class="w-full px-4 py-2 border rounded focus:outline-none" placeholder="Software Engineer" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="description">Job Description</label>
                <textarea cols="30" rows="7" id="description" name="description"
                    class="w-full px-4 py-2 border rounded focus:outline-none"
                    placeholder="We are seeking a skilled and motivated Software Developer to join our growing development team..."></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="salary">Annual Salary</label>
                <input id="salary" type="number" name="salary"
                    class="w-full px-4 py-2 border rounded focus:outline-none" placeholder="90000" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="requirements">Requirements</label>
                <textarea id="requirements" name="requirements" class="w-full px-4 py-2 border rounded focus:outline-none"
                    placeholder="Bachelor's degree in Computer Science"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="benefits">Benefits</label>
                <textarea id="benefits" name="benefits" class="w-full px-4 py-2 border rounded focus:outline-none"
                    placeholder="Health insurance, 401k, paid time off"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="tags">Tags (comma-separated)</label>
                <input id="tags" type="text" name="tags"
                    class="w-full px-4 py-2 border rounded focus:outline-none"
                    placeholder="development,coding,java,python" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="job_type">Job Type</label>
                <select id="job_type" name="job_type" class="w-full px-4 py-2 border rounded focus:outline-none">
                    <option value="Full-Time" selected>
                        Full-Time
                    </option>
                    <option value="Part-Time">Part-Time</option>
                    <option value="Contract">Contract</option>
                    <option value="Temporary">Temporary</option>
                    <option value="Internship">Internship</option>
                    <option value="Volunteer">Volunteer</option>
                    <option value="On-Call">On-Call</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="remote">Remote</label>
                <select id="remote" name="remote" class="w-full px-4 py-2 border rounded focus:outline-none">
                    <option value="false">No</option>
                    <option value="true">Yes</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="address">Address</label>
                <input id="address" type="text" name="address"
                    class="w-full px-4 py-2 border rounded focus:outline-none" placeholder="123 Main St" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="city">City</label>
                <input id="city" type="text" name="city"
                    class="w-full px-4 py-2 border rounded focus:outline-none" placeholder="Albany" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="state">State</label>
                <input id="state" type="text" name="state"
                    class="w-full px-4 py-2 border rounded focus:outline-none" placeholder="NY" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="zipcode">ZIP Code</label>
                <input id="zipcode" type="text" name="zipcode"
                    class="w-full px-4 py-2 border rounded focus:outline-none" placeholder="12201" />
            </div>

            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Company Info
            </h2>

            <div class="mb-4">
                <label class="block text-gray-700" for="company_name">Company Name</label>
                <input id="company_name" type="text" name="company_name"
                    class="w-full px-4 py-2 border rounded focus:outline-none" placeholder="Company name" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="company_description">Company Description</label>
                <textarea id="company_description" name="company_description"
                    class="w-full px-4 py-2 border rounded focus:outline-none" placeholder="Company Description"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="company_website">Company Website</label>
                <input id="company_website" type="text" name="company_website"
                    class="w-full px-4 py-2 border rounded focus:outline-none" placeholder="Enter website" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="contact_phone">Contact Phone</label>
                <input id="contact_phone" type="text" name="contact_phone"
                    class="w-full px-4 py-2 border rounded focus:outline-none" placeholder="Enter phone" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="contact_email">Contact Email</label>
                <input id="contact_email" type="email" name="contact_email"
                    class="w-full px-4 py-2 border rounded focus:outline-none"
                    placeholder="Email where you want to receive applications" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="company_logo">Company Logo</label>
                <input id="company_logo" type="file" name="company_logo"
                    class="w-full px-4 py-2 border rounded focus:outline-none" />
            </div>

            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
                Save
            </button>
        </form>
    </div>
</x-layout>
