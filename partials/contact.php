<?php
declare(strict_types=1);
$old = $_SESSION['contact_old'] ?? [];
$success = $_SESSION['contact_success'] ?? null;
$errorCode = $_SESSION['contact_error_code'] ?? null;
?>
<section id="contact" class="py-12 sm:py-16 bg-gray-50">
    <div class="container-narrow space-y-8">
        <div class="space-y-3 text-center">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900"><?php echo e($ContactForm['section_title']); ?></h2>
            <p class="text-gray-700 max-w-2xl mx-auto"><?php echo e($ContactForm['section_subtitle']); ?></p>
        </div>
        <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-sm border border-gray-100 p-6 sm:p-8">
            <?php if ($success === true): ?>
                <div class="mb-4 rounded-lg border border-green-200 bg-green-50 text-green-800 px-4 py-3" role="status">
                    <?php echo e($Messages['contact_success']); ?>
                </div>
            <?php elseif ($success === false && $errorCode === 'validation'): ?>
                <div class="mb-4 rounded-lg border border-amber-200 bg-amber-50 text-amber-800 px-4 py-3" role="alert">
                    <?php echo e($Messages['contact_error_validation']); ?>
                </div>
            <?php elseif ($success === false && $errorCode === 'generic'): ?>
                <div class="mb-4 rounded-lg border border-red-200 bg-red-50 text-red-800 px-4 py-3" role="alert">
                    <?php echo e($Messages['contact_error_generic']); ?>
                </div>
            <?php endif; ?>
            <form method="<?php echo e($ContactForm['method']); ?>" action="<?php echo e($ContactForm['action']); ?>" novalidate class="space-y-4">
                <div class="space-y-1">
                    <label for="contact-name" class="block text-sm font-semibold text-gray-800"><?php echo e($ContactForm['fields']['name']['label']); ?></label>
                    <input id="contact-name" name="name" type="text" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus-ring" placeholder="<?php echo e($ContactForm['fields']['name']['placeholder']); ?>" value="<?php echo e($old['name'] ?? ''); ?>" required>
                </div>
                <div class="space-y-1">
                    <label for="contact-email" class="block text-sm font-semibold text-gray-800"><?php echo e($ContactForm['fields']['email']['label']); ?></label>
                    <input id="contact-email" name="email" type="email" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus-ring" placeholder="<?php echo e($ContactForm['fields']['email']['placeholder']); ?>" value="<?php echo e($old['email'] ?? ''); ?>" required>
                </div>
                <div class="space-y-1">
                    <label for="contact-phone" class="block text-sm font-semibold text-gray-800"><?php echo e($ContactForm['fields']['phone']['label']); ?></label>
                    <input id="contact-phone" name="phone" type="tel" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus-ring" placeholder="<?php echo e($ContactForm['fields']['phone']['placeholder']); ?>" value="<?php echo e($old['phone'] ?? ''); ?>" required>
                </div>
                <div class="space-y-1">
                    <label for="contact-service" class="block text-sm font-semibold text-gray-800"><?php echo e($ContactForm['fields']['service']['label']); ?></label>
                    <select id="contact-service" name="service" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus-ring" aria-label="<?php echo e($ContactForm['fields']['service']['label']); ?>">
                        <option value=""><?php echo e($ContactForm['fields']['service']['placeholder']); ?></option>
                        <?php foreach ($ContactForm['fields']['service']['options'] as $value => $label): ?>
                            <option value="<?php echo e($value); ?>" <?php echo isset($old['service']) && $old['service'] === $value ? 'selected' : ''; ?>>
                                <?php echo e($label); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="space-y-1">
                    <label for="contact-message" class="block text-sm font-semibold text-gray-800"><?php echo e($ContactForm['fields']['message']['label']); ?></label>
                    <textarea id="contact-message" name="message" rows="4" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus-ring" placeholder="<?php echo e($ContactForm['fields']['message']['placeholder']); ?>" required><?php echo e($old['message'] ?? ''); ?></textarea>
                </div>
                <div class="pt-2">
                    <button type="submit" class="w-full sm:w-auto inline-flex justify-center items-center px-6 py-3 rounded-lg bg-brand-primary text-white font-semibold hover:bg-gray-900 focus-ring">
                        <?php echo e($ContactForm['submit_label']); ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php
unset($_SESSION['contact_success'], $_SESSION['contact_error_code'], $_SESSION['contact_old']);
?>
